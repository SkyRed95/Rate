<?php
$ccy = $_GET['ccy'];
$range = $_GET['range'];
$connect = new mysqli("localhost", "SkyRed", "1596357", "rate_db");

$result = $connect->query("SELECT `Ccy`, `Base_ccy`, `Buy`, `Sale`, `Date` FROM `rate` WHERE `Ccy` LIKE '" . $ccy . "' and
Date >= '" . $range[0] . "' and Date <= '" . $range[1] . "'");
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo $row["Ccy"] . $row["Base_ccy"] . $row["Buy"] . $row["Sale"];
    }
} else {
    echo "0 results";
}
$connect->close();