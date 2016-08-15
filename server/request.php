<?php
$data    = $_POST['data'];
$connect = new mysqli( "localhost", "SkyRed", "1596357", "rate_db" );
$date    = date( "Y-m-d" );

foreach ( $data as $value ) {
	$connect->query( "INSERT INTO `rate`(`Ccy`, `Base_ccy`, `Buy`, `Sale`, `Date`)
VALUES ('" . $value[0][0] . "','" . $value[1][0] . "'," . $value[2][0] . "," . $value[3][0] . ",'" . $date . "')" );
}