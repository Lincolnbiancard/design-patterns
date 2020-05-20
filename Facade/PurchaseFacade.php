<?php 
require "./Stock.php";
require "./Delivery.php";
require "./Payment.php";

class PurchaseFacade{
    public static function checkoutLogic($idProduct, $address, $cep, $company, $typePayment)
    {
        $priceProduct       = Stock::returnPriceProduct($idProduct);
        $delivery           = new Delivery();
        $delivery->address  = $address;
        $delivery->cep      = $cep;
        $delivery->company  = $company;
        $priceDelivery      = $delivery->calcDelivery();
        $total              = $priceProduct + $priceDelivery;
        if($typePayment == 1) {
            Payment::payToCard($total);
        } else {
            Payment::payToBillet($total);
        }
    }
}