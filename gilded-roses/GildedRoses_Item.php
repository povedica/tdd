<?php

class GildedRoses_Item
{
    private $sellin;
    private $quantity;

    const DECREASE_SELLIN_UNITS_BY_DAY = 1;
    const DECREASE_QUANTITY_UNITS_BY_DAY = 1;
    const MULTIPLIER_FACTOR_WHEN_SELLIN_HAS_PASSED = 2;

    public function __construct($sellin, $quantity)
    {
        $this->sellin = $sellin;
        $this->set_quantity($quantity);
    }

    public function decrease_sellin()
    {
        $this->sellin = $this->sellin - self::DECREASE_SELLIN_UNITS_BY_DAY;
    }

    public function set_quantity($quantity)
    {
        $this->quantity = ($this->quantity < 0) ? 0 : $quantity;
    }

    public function decrease_quantity()
    {
        $multiplier_factor = ($this->get_sellin() <= 0) ? self::MULTIPLIER_FACTOR_WHEN_SELLIN_HAS_PASSED : self::DECREASE_QUANTITY_UNITS_BY_DAY;
        $this->set_quantity($this->quantity - ((self::DECREASE_QUANTITY_UNITS_BY_DAY) * $multiplier_factor));
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