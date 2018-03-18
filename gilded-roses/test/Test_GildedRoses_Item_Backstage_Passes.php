<?php

use PHPUnit\Framework\TestCase;

require_once '../GildedRoses_Item.php';
require_once '../GildedRoses_Item_Backstage_Passes.php';

/**
 * Class Test_GildedRoseItem
 */
class Test_GildedRoses_Item_Backstage_Passes extends TestCase
{
    /** @var GildedRoses_Item_Backstage_Passes */
    private $item;

    public function setUp()
    {
        $this->item = new GildedRoses_Item_Backstage_Passes(10, 10);
    }

    /**
     * @param $n
     * @param $expected
     * @dataProvider provider_data_for_test_backstages_pases_increase_value_as_its_sellin_approaches
     */
    public function test_backstages_pases_increase_value_as_its_sellin_approaches($n,$expected)
    {
        $this->item = new GildedRoses_Item_Backstage_Passes($n, $n);
        $this->item->decrease_sellin();
        $this->assertEquals($expected, $this->item->get_quality());
    }

    /**
     * @param $n
     * @param $expected
     * @dataProvider provider_data_for_test_backstages_pases_increase_value_by_three_when_less_than_6_days_to_sellin
     */
    public function test_backstages_pases_increase_value_by_three_when_less_than_6_days_to_sellin($n,$expected)
    {
        $this->item = new GildedRoses_Item_Backstage_Passes($n, $n);
        $this->item->decrease_sellin();
        $this->assertEquals($expected, $this->item->get_quality());
    }

    public function test_quality_drops_to_zero_when_sellin_has_passed(){
        $this->item = new GildedRoses_Item_Backstage_Passes(1,10);
        $this->item->decrease_sellin();
        $this->assertEquals(0,$this->item->get_quality());
    }

    /**
     * Provide set of data to test cases
     * @return array
     */
    public function provider_data_for_test_backstages_pases_increase_value_as_its_sellin_approaches()
    {
        return array(
            array(10, 12),
            array(11, 13),
            array(12, 13)
        );
    }

    /**
     * Provide set of data to test cases
     * @return array
     */
    public function provider_data_for_test_backstages_pases_increase_value_by_three_when_less_than_6_days_to_sellin()
    {
        return array(
            array(6, 9),
            array(5, 8),
            array(7, 9),
            array(20, 21)
        );
    }
}
