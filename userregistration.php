<?php
	include("session.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/mystyle.css" /> 
</head>
<body>
<?php
include("menu.php");
show_menu("userregistration");
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<h2>Registrar</h2>
<hr/>
<form action="userregister.php" method="POST">
  <div class="container">
	<input type="text" placeholder="Primeiro nome" name="firstname" required>
    <input type="text" placeholder="Nome do meio" name="middlename" required>
    <input type="text" placeholder="Último nome" name="lastname" required>
  	<label><b>Data de nascimento</b>
    <input type="date" name="birthdate" required>
    </label>
    <input type="text" placeholder="Nome de usuário" name="username" required>
    <input type="password" placeholder="Nova senha" name="password" required>
    <input type="password" placeholder="Repetir a senha" name="psw-repeat" required>
    <div class="clearfix">
      <button type="submit" class="signupbtn">Registrar</button>
	  <input type="reset" class="cancelbtn" value="Cancelar">
    </div>
  </div>
</form>