<?php
  function show_menu(string $active)
  {
    echo "<div class=\"icon-bar\">";

    if ($active != "home") {
      echo "<a href = \"home.php\" ><i class=\"fa fa-home\" ></i ></a >";
    } else {
      echo "<a class = \"active\" ><i class=\"fa fa-home\" ></i ></a >";
    }

    if ($active != "users") {
      echo "<a href = \"users.php\" href = \"#\" ><i class=\"fa fa-user\" ></i ></a >";
    } else {
      echo "<a class = \"active\" href = \"#\" ><i class=\"fa fa-user\" ></i ></a >";
    }

    if ($active != "userregistration") {
      echo "<a href = \"userregistration.php\" ><i class=\"fa fa-registered\" ></i ></a >";
    } else {
      echo "<a class = \"active\" ><i class=\"fa fa-registered\" ></i ></a >";
    }

    if ($active != "customers") {
      echo "<a href=\"customers.php\" ><i class=\"fa fa-user-circle\" ></i ></a >";
    } else {
      echo "<a class=\"active\" ><i class=\"fa fa-user-circle\" ></i ></a >";
    }

    if ($active != "orders") {
      echo "<a href = \"orders.php\" ><i class=\"fa fa-cart-plus\" ></i ></a >";
    } else {
      echo "<a class = \"active\" ><i class=\"fa fa-cart-plus\" ></i ></a >";
    }

    if ($active != "products") {
      echo "<a href = \"products.php\" ><i class=\"fa fa-barcode\" ></i ></a >";
    } else {
      echo "<a class = \"active\" ><i class=\"fa fa-barcode\" ></i ></a >";
    }

    if ($active != "logout") {
	    echo "<a href = \"logout.php\" ><i class=\"fa fa-power-off\" ></i ></a >";
    } else {
      echo "<a class = \"active\" ><i class=\"fa fa-power-off\" ></i ></a >";
    }

    echo "</div>";
  }
?>
