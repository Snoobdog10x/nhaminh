<?php
require_once("./Class/product.php");
require_once("./Class/slider.php");
class database
{
    public $servername = "localhost";
    public $username = "id17862636_admin";
    public $password = "aqHdq?\-o(Zb0gdT";
    public $database = "id17862636_nhaminhdb";
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
        $sql = "SELECT * FROM products WHERE type='" . $type."'";
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
     function add_product($ID, $name, $price, $image, $smallimage, $type)
    {
        $sql = sprintf("INSERT INTO products VALUES ('%s', '%s', '%s', '%s', '%s', '%s')",$ID,$name,$price,$image,$smallimage,$type);
        if ($this->conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $this->conn->error;
}
    }
    function add_slider($ID,$type, $image)
    {
        $sql = sprintf("INSERT INTO slider VALUES ('%s', '%s', '%s')",$ID,$type,$image);
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
