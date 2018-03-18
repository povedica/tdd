<?php
namespace GildedRoses;

class Item
{
    protected $sellin;
    protected $quality;

    const DECREASE_SELLIN_UNITS_BY_DAY = 1;
    const DECREASE_QUALITY_UNITS_BY_DAY = 1;
    const MULTIPLIER_FACTOR_WHEN_SELLIN_HAS_PASSED = 2;

    public function __construct($sellin, $quality)
    {
        $this->set_sellin($sellin);
        $this->set_quality($quality);
    }

    public function set_sellin($sellin)
    {
        $this->sellin = $sellin;
        $this->sellin = ($this->sellin < 0) ? 0 : $this->sellin;
    }

    public function decrease_sellin()
    {
        $this->set_sellin($this->sellin - self::DECREASE_SELLIN_UNITS_BY_DAY);
        $this->update_quality();
    }

    public function set_quality($quality)
    {
        if ($quality > 50) {
            $quality = 50;
        } elseif ($quality < 0) {
            $quality = 0;
        }

        $this->quality = $quality;
    }

    public function update_quality()
    {
        $multiplier_factor = ($this->get_sellin() <= 0) ? self::MULTIPLIER_FACTOR_WHEN_SELLIN_HAS_PASSED : self::DECREASE_QUALITY_UNITS_BY_DAY;
        $this->set_quality($this->quality - ((self::DECREASE_QUALITY_UNITS_BY_DAY) * $multiplier_factor));
    }

    public function get_sellin()
    {
        return $this->sellin;
    }

    public function get_quality()
    {
        return $this->quality;
    }

}