<?php

$dbhost = "localhost";
$dbname = "goods";
$username = "root";
$password = "";
$db = new PDO("mysql:host=$dbhost; dbname=$dbname", $username, $password);

/*Вывод таблицы товаров из БД из связанных таблиц*/
function get_goods_all()
{
    global $db;
    $sql = 'SELECT product.id, product.name, product.articul, product.price, product_type.name, product_section.name FROM `product` LEFT JOIN product_assignment ON product_assignment.id=product.id LEFT JOIN product_type ON product_type.id=product_assignment.type_id LEFT JOIN product_section ON product_section.id=product_assignment.section_id ORDER BY product.id ASC';
    $products = $db->query($sql);
    return $products;
}

/*ф-ция, получающая товар по его id*/
function get_good_by_id($id)
{
    global $db;
    $sql = "SELECT product.id, product.name, product.articul, product.price, product_type.name, product_section.name FROM `product` LEFT JOIN product_assignment ON product_assignment.id=product.id LEFT JOIN product_type ON product_type.id=product_assignment.type_id LEFT JOIN product_section ON product_section.id=product_assignment.section_id WHERE product.id = ".$id."";
    $good_one = $db->query($sql);
    return $good_one;
}

