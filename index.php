<?php require 'components/db.php';?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог товаров</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="container">
        <div class="goods">

            <div class="header">
                <div class="header_title">
                    <h1>Каталог товаров</h1>
                </div>
                <div class="line">
                    <hr class="line_dashed">
                </div>
            </div>

            <div class="main">
                <table class="goods_table">
                    <tr class="goods_table-title">
                        <th>№</th>
                        <th>Название товара </th>
                        <th>Артикул товара</th>
                        <th>Цена</th>
                        <th>Отдел магазина</th>
                        <th>Категория товара</th>
                    </tr>
                    <?php
                    $products = get_goods_all();
                    foreach ($products as $products) {
                    ?>
                        <tr class="goods_table-zone">
                            <td><?= $products[0] ?></td>
                            <td>
                                <a class="goods_table-link" href="one-goods.php?id=<?= $products[0]; ?>"><?= $products[1]; ?></a>
                            </td>
                            <td><?= $products[2] ?></td>
                            <td><?= $products[3] ?></td>
                            <td><?= $products[4] ?></td>
                            <td><?= $products[5] ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
                <div class="line">
                    <hr class="line_dashed">
                </div>
                <div class="read_goods">
                    <h2>Добавь новую позицию в таблицу</h2>
                    <form action="vendor/create.php" method="post">
                        <p>Название нового товара:</p>
                        <input type="text" name="title">
                        <p>Артикул нового товара:</p>
                        <input type="number" name="articul">
                        <p>Цена нового товара:</p>
                        <input type="number" name="price">
                       <br>
                        <button type="submit" class="read_goods-button">Добавить в таблицу</button>
                    </form>
                </div>
            </div>

            <div class="footer">
                <div class="line">
                    <hr class="line_dashed">
                </div>
                <div>
                    <p class="fio">&copy; Av 2023</p>
                </div>
            </div>

        </div>
    </div>

</body>

</html>