<?php
include("config.php");
include("session.php");

$id = $_POST['id'];
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$birthdate = $_POST['birthdate'];
$username = $_POST['username'];
$password = md5($_POST['password']);

$sql = "UPDATE usuarios SET firstname='$firstname', middlename='$middlename', lastname='$lastname', birthdate='$birthdate', username='$username', password='$password' 
WHERE id='$id'";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Usuário atualizado com sucesso!");';
	echo 'window.location="users.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Erro atualizando usuário!");';
	echo 'window.location="users.php";';
	echo '</script>';
}
?>