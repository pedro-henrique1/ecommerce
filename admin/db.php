<?php

function produto_get_data($redirectOnError): array
{
    $name = filter_input(INPUT_POST, 'name');
    $price = filter_input(INPUT_POST, 'price');
    $description = filter_input(INPUT_POST, 'description');
    $category_id = filter_input(INPUT_POST, 'category_id');
    $price_share = filter_input(INPUT_POST, 'price_share');
    $image = filter_input(INPUT_POST, 'image');

//    var_dump($name,$description,$price,$category_id,$price_share, $image);
    if (is_null($name)) {
        header('location:' . $redirectOnError);
        die();
    }
    return compact('name', 'price', 'description', 'category_id', 'price_share', 'image');
}


$CreatProduct = function () use ($conn) {
    $data = produto_get_data('/admin/produto');

    echo '<pre>';
    var_dump($data);
    echo '</pre>';

    $sql = 'INSERT INTO produtos (name, description, category_id, price, price_share, image) VALUE (:name, :description, :category_id, :price, :price_share, :image);';

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $data['name'], PDO::PARAM_STR, 100);
    $stmt->bindParam(':description', $data['description'], PDO::PARAM_STR, 500);
    $stmt->bindParam(':image', $data['image'], PDO::PARAM_STR, 100);
    $stmt->bindParam(':category_id', $data['category_id']);
    $stmt->bindParam(':price', $data['price']);
    $stmt->bindParam(':price_share', $data['price_share']);


    return $stmt->execute();

};



