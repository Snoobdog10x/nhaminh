<?php
class OrderItem
{
    public $ID;
    public $phonecom;
    public $phonemodel;
    public $quantity;
    public $price;
    function __construct($ID, $phonecom, $phonemodel, $quantity, $price)
    {
        $this->ID = $ID;
        $this->phonecom = $phonecom;
        $this->phonemodel = $phonemodel;
        $this->quantity = $quantity;
        $this->price = $price;
    }
    function isOrderItem($ID, $phonecom, $phonemodel)
    {
        if ($ID == $this->ID && $phonecom == $this->phonecom && $phonemodel == $this->phonemodel)
            return true;
        return false;
    }
}
