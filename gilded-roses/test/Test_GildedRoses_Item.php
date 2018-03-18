<?php

use PHPUnit\Framework\TestCase;

require_once '../GildedRoses_Item.php';
require_once '../GildedRoses_Item_Aged_Brie.php';
require_once '../GildedRoses_Item_Sulfura.php';

/**
 * Class Test_GildedRoseItem
 */
class Test_GildedRoses_Item extends TestCase
{
    /** @var GildedRoses_Item */
    private $item;

    public function setUp()
    {
        $this->item = new GildedRoses_Item(10, 10);
    }

    public function test_decrease_one_day_sellin_is_ok()
    {
        $this->item->decrease_sellin();
        $this->assertEquals(9, $this->item->get_sellin());

    }

    public function test_decrease_one_unit_quality_is_ok()
    {
        $this->item->update_quality();
        $this->assertEquals(9, $this->item->get_quality());
    }

    public function test_decrease_twice_faster_if_sellin_has_passed()
    {
        $this->item = new GildedRoses_Item(0, 10);
        $this->item->update_quality();
        $this->assertEquals(8, $this->item->get_quality());
    }

    public function test_quality_is_never_negative()
    {
        $this->item = new GildedRoses_Item(10, -1);
        $this->item->update_quality();
        $this->assertEquals(0, $this->item->get_quality());
    }

    public function test_if_aged_brie_quality_increase_quality_as_it_gets_older()
    {
        $this->item = new GildedRoses_Item_Aged_Brie(10, 10);
        $this->item->decrease_sellin();
        $this->assertEquals(11, $this->item->get_quality());
    }

    public function test_item_max_quality_value_is_50()
    {
        $this->item = new GildedRoses_Item_Aged_Brie(10, 51);
        $this->assertEquals(50, $this->item->get_quality());
    }

    public function test_sulfuras_item_never_decrease_sellin(){
        $this->item = new GildedRoses_Item_Sulfura(10);
        $this->assertEquals(10,$this->item->get_quality());
    }
}
