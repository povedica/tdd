<?php

namespace PrintDate;

class PrintDate
{
    public function printCurrentDate()
    {
        echo $this->getCurrentDate();
    }

    public function getCurrentDate(){
        return date('Y-m-d H:i:s');
    }
}