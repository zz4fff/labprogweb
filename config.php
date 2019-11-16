<?php
	$mysqli = new mysqli('localhost', 'root', '', 'cadastro');

	/* check connection */
	if (mysqli_connect_errno()) {
    printf("Falha na conexão: %s\n", mysqli_connect_error());
    exit();
	}
?>