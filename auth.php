<?php
$connect = new mysqli( "localhost", "SkyRed", "", "rate_db" );
if ( ! isset( $_SERVER['PHP_AUTH_USER'] ) ) {
	header( 'WWW-Authenticate: Basic realm="rate"' );
	header( 'HTTP/1.1 401 Unauthorized' );
} else {
	$check_of_user = $connect->query("SELECT * FROM `users`
        WHERE `username` LIKE '" . $_SERVER['PHP_AUTH_USER'] . "' AND `password` LIKE '" . $_SERVER['PHP_AUTH_PW'] . "'");

	if (mysqli_num_rows($check_of_user) < 1) {
			header( 'WWW-Authenticate: Basic realm="rate"' );
			header( 'HTTP/1.1 401 Unauthorized' );
	}
}