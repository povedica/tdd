<?php
namespace GildedRose\Test;

use PHPUnit\Framework\TestCase;
use GildedRoses\GildedRoses\Item;


/**
 * Class Test_GildedRoseItem
 */
class Test_GildedRoses_Item_Aged_Brie extends TestCase
{
    /** @var \GildedRoses\ItemAgedBrie */
    private $item;

    public function setUp()
    {
        $this->item = new \GildedRoses\Item\AgedBrie(10, 10);
    }

    public function test_if_aged_brie_quality_increase_quality_as_it_gets_older()
    {
        $this->item = new \GildedRoses\Item\AgedBrie(10, 10);
        $this->item->decrease_sellin();
        $this->assertEquals(11, $this->item->get_quality());
    }

    public function test_item_max_quality_value_is_50()
    {
        $this->item = new \GildedRoses\Item\AgedBrie(10, 51);
        $this->assertEquals(50, $this->item->get_quality());
    }
}
