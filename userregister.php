<?php
include("config.php");
include("session.php");

$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$birthdate = $_POST['birthdate'];
$username = $_POST['username'];
$password = md5($_POST['password']);

$sql = "INSERT INTO usuarios(firstname, middlename, lastname, birthdate, username, password) 
VALUES('$firstname', '$middlename', '$lastname', '$birthdate', '$username', '$password')";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Novo usuário adicionado!");';
	echo 'window.location="index.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Erro: usuário duplicado!");';
	echo 'window.location="userregistration.php";';
	echo '</script>';
}
?>