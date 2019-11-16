<?php
include("session.php");
include("config.php");
$id = $_GET['codigo'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/mystyle.css"/>
</head>
<body>
<?php
include("menu.php");
show_menu("customers");
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<h2>Editar Cliente</h2>
<hr/>

<form action="userupdate.php" method="POST">
    <div class="container">
      <?php
      $result = mysqli_query($mysqli, "SELECT * FROM clientes WHERE codigo='$id'");
      while ($row = mysqli_fetch_array($result)) {
        echo "<input type='hidden' name='id' value='{$row['codigo']}' required>";
        echo "<input type='text' placeholder='Primeiro nome' name='firstname' value='{$row['firstname']}' required>";
        echo "<input type='text' placeholder='Nome do meio' name='middlename' value='{$row['middlename']}' required>";
        echo "<input type='text' placeholder='Último nome' name='lastname' value='{$row['lastname']}' required>";
        echo "<label><b>Data de nascimento</b>";
        echo "<input type='date' name='birthdate' value='{$row['birthdate']}'required>";
        echo "</label>";
        echo "<input type='text' placeholder='Celular' name='cellphone' value='{$row['cellphone']}'>";
        echo "<input type='text' placeholder='E-mail' name='email' value='{$row['email']}'>";
        echo "<div class='clearfix'>";
        echo "<button type='submit' class='signupbtn'>Atualizar</button>";
        echo "</div>";
      }
      ?>
    </div>
</form>