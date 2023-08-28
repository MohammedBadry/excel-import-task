<?php
namespace Requests;

class OrderRequest
{

    function validate()
    {
        // Allowed mime types 
        $excelMimes = array('text/xls', 'text/xlsx', 'application/excel', 'application/vnd.msexcel', 'application/vnd.ms-excel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'); 

        // Validate whether selected file is a Excel file 
        if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $excelMimes)){ 
            return true;
        }
        return false;
    }

    function isUploaded()
    {
        // upload file 
        if(is_uploaded_file($_FILES['file']['tmp_name'])){ 
            return true;
        }
        return false;
    }
}