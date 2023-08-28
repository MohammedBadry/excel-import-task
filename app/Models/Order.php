<?php
namespace Models;
use Libraries\Database;
use Requests\OrderRequest;
use Strategies\Import\ImportStrategyContext;
use Strategies\Import\PhpspreadsheetStrategy;

class Order
{
    public function __construct()
    {
        $this->dbc = (new Database())->getInstance();
        $this->request = new OrderRequest();
    }

    function allOrders()
    {
        return $this->dbc->query("SELECT * FROM orders order by id asc");
    }

    function saveOrder($data)
    {
        $rs = $this->dbc->prepare("INSERT INTO orders 
            (`e`,`name`,`address`,`product_name`,`quantity`,`price`,`sub_total`,`total`,`date`) 
            VALUES 
            (?,?,?,?,?,?,?,?,?)");

        $rs->execute([
            $data['e'],
            $data['name'],
            $data['address'],
            $data['product_name'],
            $data['quantity'],
            $data['price'],
            $data['sub_total'],
            $data['total'],
            $data['date']
        ]);
    }

    function importOrders($data) 
    {
        // Validate whether selected file is a Excel file 
        if($this->request->validate()===true){ 

            // we can add new starategy and switch between them at runtime
            $strategy = new PhpspreadsheetStrategy();

            // If the file is uploaded 
            if($this->request->isUploaded()){
                $_SESSION['success'] = 'Member data has been imported successfully.'; 

                $import = new ImportStrategyContext($strategy);
                $import->import();
            }else{ 
                $_SESSION['error'] = 'Something went wrong, please try again.';
            } 
 
        } else {
            unset($_SESSION['success']);
            $_SESSION['error'] = 'Please upload a valid Excel file.';
        }

        //redirct to index page
        require_once 'app/Views/index.php';
    }
}