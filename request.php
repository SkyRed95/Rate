<?php
$data = $_POST['data'];
$connect = new mysqli("localhost", "SkyRed", "", "rate_db");
$date = date("Y-m-d");
$check_of_date = $connect->query("SELECT `Date` FROM `rate` WHERE `Date` LIKE '" . $date . "'");

if (mysqli_num_rows($check_of_date) < 1) {
    foreach ($data as $value) {
        $connect->query("INSERT INTO `rate`(`Ccy`, `Base_ccy`, `Buy`, `Sale`, `Date`)
VALUES ('" . $value[0][0] . "','" . $value[1][0] . "'," . $value[2][0] . "," . $value[3][0] . ",'" . $date . "')");
    }
}
else {
    echo 'Сегодня Вы уже получали данные!';
}