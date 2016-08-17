<?php
//$privatbankAPI = "https://api.privatbank.ua/p24api/pubinfo?exchange&json&coursid=11";
//$connect = new mysqli( "127.0.0.1:3306", "SkyRed", "1596357", "rate_db" );
//$date    = date( "Y-m-d" );
//
//$json = file_get_contents($privatbankAPI);
//$data = json_decode($json, TRUE);
//
//foreach ( $data as $value ) {
//	$connect->query( "INSERT INTO `rate`(`Ccy`, `Base_ccy`, `Buy`, `Sale`, `Date`)
//VALUES ('" . $value[0][0] . "','" . $value[1][0] . "'," . $value[2][0] . "," . $value[3][0] . ",'" . $date . "')" );
//	var_dump($value);
//}
//var_dump($json);



$data    = $_POST['data'];
$connect = new mysqli( "127.0.0.1:3306", "SkyRed", "1596357", "rate_db" );
$date    = date( "Y-m-d" );

foreach ( $data as $value ) {
	$connect->query( "INSERT INTO `rate`(`Ccy`, `Base_ccy`, `Buy`, `Sale`, `Date`)
VALUES ('" . $value[0][0] . "','" . $value[1][0] . "'," . $value[2][0] . "," . $value[3][0] . ",'" . $date . "')" );
}