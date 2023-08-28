<?php 
namespace Controllers;

use Models\Order;

class OrderController
{
    public function __construct()
    {
        $this->order = new Order();
    }

    public function index()
    {        
        //form import page
        require_once 'app/Views/index.php';
    }

    function allOrders()
    {
        //retrive orders page
        $orders = $this->order->allOrders();
        require_once('app/Views/orders.php');
    }

    function importOrders()
    {
        //impor orders method
        return $this->order->importOrders($_POST);
    } 
}