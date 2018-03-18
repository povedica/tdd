<?php
require_once 'Item.phponce '_Item_AgedBrie.php';
require_once '_Item_Sulfura.php';
require_once '_Item_Backstage_Passes.php';
require_once 'GildedRoses.php';

$stock = GildedRoses::instance();
$stock->add_item(new GildedRoses_Item(0, 54));
$stock->add_item(new GildedRoses_Item(10, 10));
$stock->add_item(new GildedRoses_Item_Sulfura(51));
$stock->add_item(new GildedRoses_Item_Sulfura(51));
$stock->add_item(new GildedRoses_Item_Sulfura(10));
$stock->add_item(new GildedRoses_Item_Sulfura(10));
$stock->add_item(new GildedRoses_Item_Aged_Brie(10, 10));
$stock->add_item(new GildedRoses_Item_Aged_Brie(10, 10));
$stock->add_item(new GildedRoses_Item_Backstage_Passes(10, 10));
$stock->add_item(new GildedRoses_Item_Backstage_Passes(10, 10));

$stock->update_stock();
$stock->print_stock();