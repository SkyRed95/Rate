<?php
$connect = new mysqli( "localhost", "SkyRed", "1596357", "rate_db" );
if ( ! isset( $_SERVER['PHP_AUTH_USER'] ) ) {
	header( 'WWW-Authenticate: Basic realm="rate"' );
	header( 'HTTP/1.1 401 Unauthorized' );
} else {
	$query = "SELECT * FROM `users`
	WHERE `username` LIKE '" . $_SERVER['PHP_AUTH_USER'] . "' AND `password` LIKE '" . $_SERVER['PHP_AUTH_PW'] . "'";

	if ( $stmt = mysqli_prepare( $connect, $query ) ) {

		/* выполняем запрос */
		mysqli_stmt_execute( $stmt );

		/* передаем результат */
		mysqli_stmt_store_result( $stmt );

		if ( mysqli_stmt_num_rows( $stmt ) == 1 ) {
			echo 'ok';
		} else {
			header( 'WWW-Authenticate: Basic realm="rate"' );
			header( 'HTTP/1.1 401 Unauthorized' );
		}

		/* очищаем результат */
		mysqli_stmt_free_result( $stmt );

		/* закрываем запрос */
		mysqli_stmt_close( $stmt );
	}
}