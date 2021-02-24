<?php

function produto_get_data($redirectOnError): array
{
    $name = filter_input(INPUT_POST, 'name');
    $price = filter_input(INPUT_POST, 'price');
    $description = filter_input(INPUT_POST, 'description');
    $category_id = filter_input(INPUT_POST, 'category_id');
    $price_share = filter_input(INPUT_POST, 'price_share');
    $voltagem = filter_input(INPUT_POST, 'voltagem');

    if (empty(trim($name)) or empty($price) or empty(trim($description)) or empty($category_id) or empty($price_share) or empty($voltagem) === "") {
        header('location:' . $redirectOnError);
        die();
    }
    return compact('name', 'price', 'description', 'category_id', 'price_share', 'voltagem');
}


$CreatProduct = function () use ($conn) {
    $data = produto_get_data('/admin/produtos');
    $image = $_FILES['image'];

    if (!preg_match("/^image\/(pjpeg|jpeg|png)$/", $image['type'])) {
        echo "Isso não é uma imagem.";
        die();
    }


    preg_match("/\.(png|jpg|jpeg){1}$/i", $image['name'], $ext);
    $nome_imagem = md5(uniqid(time())) . "." . $ext[1];
    $caminho_imagem = "upload/" . $nome_imagem;
    move_uploaded_file($image["tmp_name"], $caminho_imagem);

    $reference = md5(uniqid(time()));

    $sql = 'INSERT INTO produtos (name, description, category_id, price, price_share, image,reference, voltagem) VALUE (:name, :description, :category_id, :price, :price_share, :image, :reference, :voltagem);';

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $data['name'], PDO::PARAM_STR, 100);
    $stmt->bindParam(':reference', $reference, PDO::PARAM_STR, 70);
    $stmt->bindParam(':voltagem', $data['voltagem'], PDO::PARAM_STR_CHAR);
    $stmt->bindParam(':description', $data['description'], PDO::PARAM_STR, 500);
    $stmt->bindParam(':image', $nome_imagem, PDO::PARAM_STR, 100);
    $stmt->bindParam(':category_id', $data['category_id'], PDO::PARAM_INT);
    $stmt->bindParam(':price', $data['price'], PDO::PARAM_INT);
    $stmt->bindParam(':price_share', $data['price_share'], PDO::PARAM_INT);

    return $stmt->execute();
};



