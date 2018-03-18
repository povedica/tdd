<?php


//namespace GildedRose;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class GildedRoses_Command extends Command
{
    protected function configure()
    {
        $this
            ->setName('gilded:run')
            ->setDescription('Gilded Rose')
            ->addArgument(
                'days',
                InputArgument::REQUIRED,
                'How many days?'
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $stock = GildedRoses::instance();
        $stock->add_item(new GildedRoses_Item(10, 10));
        $stock->add_item(new GildedRoses_Item(2, 0));
        $stock->add_item(new GildedRoses_Item(5, 7));
        $stock->add_item(new GildedRoses_Item_Sulfura(80));
        $stock->add_item(new GildedRoses_Item_Sulfura(90));
        $stock->add_item(new GildedRoses_Item_Aged_Brie(2, 0));
        $stock->add_item(new GildedRoses_Item_Backstage_Passes(15, 20));
        $stock->add_item(new GildedRoses_Item_Backstage_Passes(10, 49));
        $stock->add_item(new GildedRoses_Item_Backstage_Passes(5, 49));

        $days = (int)$input->getArgument('days');
        for ($i = 0; $i < $days; $i++) {
            $output->writeln("-------- day $i --------");
            $output->writeln("name, sellIn, quality");
            $stock->update_stock();
            $stock->print_stock();
        }
    }
}