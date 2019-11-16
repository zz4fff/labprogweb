<?php
	include("config.php");
	include("session.php");

	$id = $_GET['id'];

	$sql = "DELETE FROM usuarios WHERE id='$id'";

	if(mysqli_query($mysqli, $sql)) {
	  echo '<script language="javascript">';
		echo 'alert("Usuário removido com sucesso!");';
		echo 'window.location="users.php";';
		echo '</script>';
		
	} else {
		echo '<script language="javascript">';
		echo 'alert("Erro removendo usuário!");';
		echo 'window.location="users.php";';
		echo '</script>';
	}
?>
