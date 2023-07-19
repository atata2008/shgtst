<?php require 'components/db.php'; ?>


<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $page = $_GET['id'];
    $good_one = get_good_by_id($page);
    foreach ($good_one as $good_one) {
    ?>
        <title><?= $good_one[1] ?></title>

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="goods">

            <div class="header">
                <div class="header_title">
                     <h1 class="header_title2"><?= $good_one[1] ?></h1>

                <div class="line">
                    <hr class="line_dashed">
                </div>
            </div>

            <div class="main for_main">
                <div class="main_text">
                    <p>Артикул товара: № <?= $good_one[2] ?></p>
                    <p>Цена: <?= $good_one[3] ?> руб</p>
                    <p>Отдел магазина: <?= $good_one[4] ?></p>
                    <p>Категория товара: <?= $good_one[5] ?></p>

                </div>
                <?php
                    }  ?>
                </div>
            </div>

            <div class="for_footer">
                <div class="line">
                    <hr class="line_dashed">
                </div>
                <div class="footer_back">
                    <a class="footer_link" href="index.php">Все товары >> </a>
                </div>

                <div>
                    <p class="fio">&copy; Av 2023</p>
                </div>

            </div>
        </div>
    </div>
</body>

</html>