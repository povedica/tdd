<?php

final class GildedRoses
{
    private $items = array();
    private static $instance;

    private function __construct()
    {

    }

    static public function instance()
    {
        if (self::$instance == null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function add_item(GildedRoses_Item $item)
    {
        array_push($this->items, $item);
    }

    public function update_stock()
    {
        foreach ($this->items as $item) {
            $item->decrease_sellin();
        }
    }

    public function print_stock()
    {
        foreach ($this->items as $item) {
            var_dump($item);
        }
    }
}