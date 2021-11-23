<?php
class Order
{
    public $ID;
    public $customername;
    public $phonenumber;
    public $address;
    public $status;
    public $date;
    public $total;
    function __construct($ID, $customername, $phonenumber, $address, $status, $date, $total)
    {
        $this->ID = $ID;
        $this->customername = $customername;
        $this->phonenumber = $phonenumber;
        $this->address = $address;
        $this->status = $status;
        $this->date = $date;
        $this->total = $total;
           
    }
}
