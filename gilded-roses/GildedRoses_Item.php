<?php

class GildedRoses_Item
{
    private $sellin;
    private $quantity;

    const DECREASE_SELLIN_UNITS_BY_DAY = 1;
    const DECREASE_QUANTITY_UNITS_BY_DAY = 1;

    public function __construct($sellin, $quantity)
    {
        $this->sellin = $sellin;
        $this->quantity = $quantity;
    }

    public function decrease_sellin()
    {
        $this->sellin = $this->sellin - self::DECREASE_SELLIN_UNITS_BY_DAY;
    }

    public function decrease_quantity()
    {
        $this->quantity = $this->quantity - self::DECREASE_QUANTITY_UNITS_BY_DAY;
    }

    public function get_sellin()
    {
        return $this->sellin;
    }

    public function get_quantity()
    {
        return $this->quantity;
    }

}