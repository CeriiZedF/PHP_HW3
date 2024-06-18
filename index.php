<?php require 'functions.php'; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Модуль 2</title>
</head>
    <body>
        <?php
        $cart = [
            ['name' => 'Product 1', 'image' => 'image1.jpg', 'count' => '1', 'price' => 100],
            ['name' => 'Product 2', 'image' => 'image2.jpg', 'count' => '1', 'price' => 200],
            ['name' => 'Product 3', 'image' => 'image1.jpg', 'count' => '1', 'price' => 100],
            ['name' => 'Product 4', 'image' => 'image3.jpg', 'count' => '1', 'price' => 300],
            ['name' => 'Product 5', 'image' => 'image2.jpg', 'count' => '1', 'price' => 200]
        ];
        $array = [-6, 2, 7, 5, -2, 7, 4, -34, 14, -36];

        search_negative_number($array);


        print_number(0);
        print_number(3);


        //echo renderProductCard($cart[0]);



        foreach ($cart as $product) {
            echo renderProductCard($product);
        }
        $processedCart = processCart($cart);

        ?>
    </body>
</html>
