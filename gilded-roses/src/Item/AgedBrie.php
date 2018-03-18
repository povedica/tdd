<?php
namespace GildedRoses\Item;

class AgedBrie extends \GildedRoses\Item
{
    const INCREASE_QUALITY_UNITS_WHEN_SELLIN_DECREASE = 1;

    public function decrease_sellin()
    {
        $this->set_sellin($this->sellin - self::DECREASE_SELLIN_UNITS_BY_DAY);
        $this->set_quality($this->quality + self::INCREASE_QUALITY_UNITS_WHEN_SELLIN_DECREASE);
    }
}