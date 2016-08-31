<?php
$ccy = $_GET['ccy'];
$range = $_GET['range'];
$connect = new mysqli("localhost", "SkyRed", "1596357", "rate_db");

$result = $connect->query("SELECT `Ccy`, `Base_ccy`, `Buy`, `Sale`, `Date` FROM `rate` WHERE `Ccy` LIKE '" . $ccy . "'");

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo $row["Ccy"] . $row["Buy"];
    }
} else {
    echo "0 results";
}
$connect->close();