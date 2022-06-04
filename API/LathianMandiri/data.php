<?php

function getPrice($name){
    $products = array();
    $products = [
        "phone" => [
            "price" => 10000,
            "model" => "A"
        ],
        "laptop" => [
            "price" => 10020,
            "model" => "B"
        ],
        "book" => [
            "price" => 10030,
            "model" => "C"
        ]
    ];

    foreach($products as $product => $price){
        if($product == $name){
            return $price;
            break;
        }
    }
}

?>