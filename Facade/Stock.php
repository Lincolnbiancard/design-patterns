<?php

class Stock{
    public static function returnPriceProduct($id)
    {
        if($id == 10) {
            return 1000;
        } else {
            return 0;
        }
    }
}