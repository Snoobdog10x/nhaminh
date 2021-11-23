<?php
require_once("../Class/product.php");
require_once("../Class/slider.php");
require_once("../Class/Order.php");
require_once("../Class/OrderItem.php");
class database
{
    public $servername = "localhost";
    public $username = "admin";
    public $password = "thanhanh";
    public $database = "epiz_30240223_nhaminh";
    public $conn;
    function __construct()
    {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database);

        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
    function get_product_by_type($type)
    {
        $products = array();
        $sql = "SELECT * FROM products WHERE type='" . $type . "'";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $product = new product($row['ID'], $row['name'], $row['price'], $row['image'], $row['smallimage'], $row['type']);
                array_push($products, $product);
            }
        }
        return $products;
    }
    function get_slider_by_type($type)
    {
        $sliders = array();
        $sql = "SELECT * FROM slider WHERE type='" . $type . "'";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $slider = new slider($row['type'], $row['image']);
                array_push($sliders, $slider);
            }
        }
        return $sliders;
    }
    function get_Order_by_Phone($phone)
    {
        $orders = array();
        $sql = "SELECT * FROM `CustomerOrder` WHERE PhoneNumber='" . $phone . "'";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $order = new order($row['ID'], $row['CustomerName'], $row['PhoneNumber'], $row['Address'], $row['Status'], $row['Date'], $row['Total']);
                array_push($orders, $order);
            }
        }
        return $orders;
    }
    function get_OrderItem_by_OrderID(String $ID)
    {
        $items = array();
        $sql = "SELECT * FROM `ItemOrder` WHERE ID='" . $ID . "'";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $item = new OrderItem($row['ID'], $row['PhoneCom'], $row['PhoneModel'], $row['Quantity'], $row['Price']);
                array_push($items, $item);
            }
        }
        return $items;
    }
    function add_Order(Order $Order)
    {
        $sql = sprintf("INSERT INTO `CustomerOrder` VALUES ('%s','%s', '%s', '%s', '%s', '%s','%s')", $Order->ID, $Order->customername, $Order->phonenumber, $Order->address, $Order->status, $Order->date, $Order->total);
        if ($this->conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }
    function add_OrderItem($Item)
    {
        $sql = sprintf("INSERT INTO `ItemOrder` VALUES ('%s','%s', '%s', '%s', '%s')", $Item->ID, $Item->phonecom, $Item->phonemodel, $Item->quantity, $Item->price);
        if ($this->conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }
    function add_OrderItems($Items){
        foreach($Items as $item){
            $this->add_OrderItem($item);
        }
    }
    function add_product($ID, $name, $price, $image, $smallimage, $type)
    {
        $sql = sprintf("INSERT INTO products VALUES ('%s', '%s', '%s', '%s', '%s', '%s')", $ID, $name, $price, $image, $smallimage, $type);
        if ($this->conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }
    function add_slider($ID, $type, $image)
    {
        $sql = sprintf("INSERT INTO slider VALUES ('%s', '%s', '%s')", $ID, $type, $image);
        if ($this->conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }
    function closeConnect()
    {
        $this->conn->close();
    }
}
