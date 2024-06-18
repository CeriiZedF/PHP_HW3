<?php

function search_negative_number($array)
{
    foreach ($array as $value) {
        if($value > 0){
            echo "    <span style='color:black;'>$value</span>'";
        }
        else{
            echo "    <span style='color:red;'>$value</span>";
        }
    }
}

function print_number($number){
    echo "<br>";
    if($number == 0){echo 'нуль';}
    if($number == 1){echo 'один';}
    if($number == 2){echo 'два';}
    if($number == 3){echo 'три';}

}


function processCart($products) {
    $sum = 0;
    foreach ($products as $product) {
        $count = $product['count'];
        $price = $product['price'];

        $sum += ($count * $price);


    }
    echo "<br>Sum: $sum";

return $products;
}
function renderProductCard($product) {

    $name = $product['name'];
    $image = $product['image'];
    $count = $product['count'];
    $price = $product['price'];

    $html = <<<HTML
    <div class="product-card">
        <img src="$image" alt="$name" class="product-image">
        <h2 class="product-name">$name</h2>
        <p class="product-price">Кількість: $count</p>
        <p class="product-price">Ціна: $price грн</p>
        <button class="buy-button">Придбати</button>
    </div>
HTML;

    return $html;
}
