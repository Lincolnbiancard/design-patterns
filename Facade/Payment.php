<?php

class Payment{

    public static function payToCard($price)
    {
        echo "Pago com CART�O o valor de: R$ " . $price;
    }

    public static function payToBillet($price)
    {
        echo "Pago com BOLETO o valor de: R$ " . $price;
    }
}