<?php

function genarateDiscountCalculator($purches)
{
    $discount = 0;

    if ($purches < 50) {
        $discount = 0;

        return "Purches less then 50 no discount";

    } else if ($purches >= 100) {
        $discount = $purches * 0.05; //Pruches gether then 100 or equal discount get 5%"

        $totalPayableAmount = $purches - $discount;

        return $totalPayableAmount;

    } else {
        $discount = $purches * 0.1; //Pruches gether then 100 or equal discount get 10%
        $totalPayableAmount = $purches - $discount;

        return $totalPayableAmount;
    }
}


$totalAmount = 1000;

$balence = genarateDiscountCalculator($totalAmount);

echo $balence;