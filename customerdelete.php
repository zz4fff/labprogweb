<?php
    include("config.php");
    include("session.php");

    $id = $_GET['id'];

    $sql = "DELETE FROM clientes WHERE codigo='$id'";

    if (mysqli_query($mysqli, $sql)) {
      echo '<script language="javascript">';
      echo 'alert("Cliente removido com sucesso!");';
      echo 'window.location="customers.php";';
      echo '</script>';
    } else {
      echo '<script language="javascript">';
      echo 'alert("Erro removendo cliente!");';
      echo 'window.location="customers.php";';
      echo '</script>';
    }
?>
