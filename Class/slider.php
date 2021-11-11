<?php
class slider
{
    public $type;
    public $image;
    function __construct($type, $image)
    {
        $this->type = $type;
        $this->image = $image;
    }
}
