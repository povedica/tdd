<?php

class GildedRoses_Item
{
    private $sellin;

    public function __construct($sellin)
    {
        $this->sellin = $sellin;
    }

    public function decrease_sellin()
    {
        $this->sellin--;
    }

    public function get_sellin()
    {
        return $this->sellin;
    }

}