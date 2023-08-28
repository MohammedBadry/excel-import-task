<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use Models\Order;
use Libraries\Database;

/**
 * @covers \GuzzleHttp\Psr7\UploadedFile
 */
class OrdersTest extends TestCase
{
    private $order;
    private $dbc;

    public function setUp(): void
    {
        $this->dbc = (new Database())->getInstance();
        $this->order = new Order();
    }

    public function test_can_save_order(): void
    {
        //Given
        $data['e'] = 1;
        $data['name'] = 'Mohammed Badry';
        $data['address'] = 'Giza';
        $data['product_name'] = 'Pizza';
        $data['quantity'] = 1;
        $data['price'] = 80;
        $data['sub_total'] = 80;
        $data['total'] = 100;
        $data['date'] = '2023-08-27';

        //Insert order
        $this->order->saveOrder($data);

        //Check the inserted record
        $check_query = $this->dbc->query("SELECT * FROM orders limit 1");
        $check_order = $check_query->fetch();
        
        self::assertTrue($check_order['name'] === "Mohammed Badry");
    }

    public function test_can_retreive_orders(): void
    {
        //Test retreive orders
        $orders = $this->order->allOrders();
        self::assertGreaterThan(0, count($orders->fetchAll()));

        //Truncate table orders
        $this->dbc->query("TRUNCATE orders");
    }

}