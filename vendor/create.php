<?php
require_once '../components/db.php';

$good_new_name = $_POST['title'];
$articul = $_POST['articul'];
$price =$_POST['price'];

function post_good_new()
{
    global $db;
    $sql = "INSERT INTO `product` (`id`, `position`, `url`, `name`, `articul`, `price`, `currency_id`, `price_old`, `notice`, `content`, `visible`) VALUES (NULL, '0', NULL, '".$good_new_name."', '".$articul."', '".$price."', NULL, NULL, NULL, NULL, '1')";
    $db->query($sql);
}
post_good_new();

header('Location: ../');