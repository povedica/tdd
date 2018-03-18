<?php
require_once 'GildedRoses_Item.php';
require_once 'GildedRoses_Item_Aged_Brie.php';
require_once 'GildedRoses_Item_Sulfura.php';
require_once 'GildedRoses_Item_Backstage_Passes.php';
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