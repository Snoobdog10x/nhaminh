<?php
    class product{
        public $ID;
        public $name;
        public $price;
        public $image;
        public $smallimage;
        public $type;
        function __construct($ID,$name,$price,$image,$smallimage,$type)
        {
            $this->ID=$ID;
            $this->name=$name;
            $this->price=$price;
            $this->image=$image;
            $this->smallimage=$smallimage;
            $this->type=$type;
        }
    }
