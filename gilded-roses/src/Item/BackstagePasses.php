<?php
namespace GildedRoses\Item;

class BackstagePasses extends \GildedRoses\Item
{
    const INCREASE_QUALITY_UNITS_WHEN_APPROACH_SELLIN_BY_DAY = 1;
    const INCREASE_QUALITY_FACTOR_WHEN_LESS_THAN_11_DAYS_SELLIN_BY_DAY = 2;
    const INCREASE_QUALITY_FACTOR_WHEN_LESS_THAN_6_DAYS_SELLIN_BY_DAY = 3;
    const MINIMUM_SELLIN_DAY_TO_APPLY_TWICE_FACTOR_QUALITY = 10;
    const MINIMUM_SELLIN_DAY_TO_APPLY_BY_THREE_FACTOR_QUALITY = 5;

    public function decrease_sellin()
    {
        $this->set_sellin($this->sellin - self::DECREASE_QUALITY_UNITS_BY_DAY);
        $this->update_quality();
    }

    public function update_quality()
    {
        if ($this->sellin <= self::MINIMUM_SELLIN_DAY_TO_APPLY_BY_THREE_FACTOR_QUALITY) {
            $factor = self::INCREASE_QUALITY_FACTOR_WHEN_LESS_THAN_6_DAYS_SELLIN_BY_DAY;
        } elseif ($this->sellin <= self::MINIMUM_SELLIN_DAY_TO_APPLY_TWICE_FACTOR_QUALITY) {
            $factor = self::INCREASE_QUALITY_FACTOR_WHEN_LESS_THAN_11_DAYS_SELLIN_BY_DAY;
        } else {
            $factor = 1;
        }

        if ($this->sellin == 0) {
            $quality = 0;
        } else {
            $quality = $this->quality + ((self::INCREASE_QUALITY_UNITS_WHEN_APPROACH_SELLIN_BY_DAY) * $factor);
        }

        $this->set_quality($quality);
    }

}