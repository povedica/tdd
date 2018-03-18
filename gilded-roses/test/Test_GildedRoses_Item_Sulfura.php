<?php
namespace GildedRose\Test;

use PHPUnit\Framework\TestCase;
use GildedRoses\GildedRoses\Item;

/**
 * Class Test_GildedRoseItem
 */
class Test_GildedRosesItemSulfura extends TestCase
{
    /** @var \GildedRoses\ItemSulfura */
    private $item;

    public function setUp()
    {
        $this->item = new \GildedRoses\Item\Sulfura(10, 10);
    }

    public function test_sulfuras_item_never_decrease_sellin()
    {
        $this->item = new \GildedRoses\Item\Sulfura(10);
        $this->assertEquals(10, $this->item->get_quality());
    }
}
