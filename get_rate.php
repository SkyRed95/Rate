<?php
$conn = new mysqli("localhost", "SkyRed", "1596357", "rate_db");

$result = $conn->query("SELECT `Ccy`, `Base_ccy`, `Buy`, `Sale`, `Date` FROM `rate` WHERE `Ccy` LIKE 'USD'");

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row["Ccy"] . $row["Buy"];
    }
} else {
    echo "0 results";
}
$conn->close();