<?php

class GildedRoses_Item_Backstage_Passes extends GildedRoses_Item
{
    const INCREASE_QUALITY_UNITS_WHEN_APPROACH_SELLIN_BY_DAY = 1;
    const INCREASE_QUALITY_FACTOR_WHEN_LESS_THAN_10_DAYS_SELLIN_BY_DAY = 2;

    public function decrease_sellin()
    {
        $this->sellin = $this->sellin - self::DECREASE_QUALITY_UNITS_BY_DAY;
        $this->update_quality();
    }

    public function update_quality()
    {
        $factor = ($this->get_sellin() < 10) ? self::INCREASE_QUALITY_FACTOR_WHEN_LESS_THAN_10_DAYS_SELLIN_BY_DAY : 1;

        $this->set_quality($this->quality + ((self::INCREASE_QUALITY_UNITS_WHEN_APPROACH_SELLIN_BY_DAY)*$factor));
    }

}