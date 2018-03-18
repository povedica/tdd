<?php

class GildedRoses_Item_Aged_Brie extends GildedRoses_Item
{
    const INCREASE_QUALITY_UNITS_WHEN_SELLIN_DECREASE = 1;

    public function decrease_sellin()
    {
        $this->sellin = $this->sellin - self::DECREASE_SELLIN_UNITS_BY_DAY;
        $this->set_quality($this->quality + self::INCREASE_QUALITY_UNITS_WHEN_SELLIN_DECREASE);
    }
}