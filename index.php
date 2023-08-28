<?php 
/**
 * Bootstrap page
 * Require file autoload from vendor
 */
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/dbConfig.php';

use Controllers\OrderController;


define("BASE_URL", basename(__DIR__));

/**
 * Create an object of class OrderController
 */
$controller = new OrderController();


//specify how the page will be loaded
if(!isset($_GET['act']))
{
	//calling the method to be run
	$controller->index();
}
else
{
	switch($_GET['act'])
	{
		case 'import-orders' :
			$controller->importOrders();
			break;

		case 'all-orders' :
			$controller->allOrders();
			break;

		default : 
			$controller->index();
			break;
	}
}
