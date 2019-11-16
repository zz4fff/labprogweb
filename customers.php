<?php
	include("session.php");
	include("config.php");
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
        show_menu("customers");
    ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<h2>Clientes</h2>
	<hr/>
	<div class="container">
		<?php $c = 0; ?>
		<?php
			$result = $mysqli->query("SELECT * FROM clientes");

			echo "<table border='1'>";
			if($c++ % 2 == 1) {
				echo "<tr class='odd'>";
			} else {
				echo "<tr class='even'>";
			}
			echo "<th>Primeiro nome</th>
			<th>Nome do meio</th>
			<th>Último nome</th>
			<th>Data de nascimento</th>
			<th>Celular</th>
			<th>E-mail</th>
			<th>Editar</th>
			<th>Remover</th>
			</tr>";

			while($row = mysqli_fetch_array($result)) {
				if($c++ % 2 == 1) {
					echo "<tr class='odd'>";
				} else {
					echo "<tr class='even'>";
				}
				echo "<td>" . $row['firstname'] . "</td>";
				echo "<td>" . $row['middlename'] . "</td>";
				echo "<td>" . $row['lastname'] . "</td>";
				echo "<td>" . $row['birthdate'] . "</td>";
				echo "<td>" . $row['cellphone'] . "</td>";
				echo "<td>" . $row['email'] . "</td>";
				echo "<td><a href='customeredit.php?id=".$row['codigo']."'><img src='./images/icons8-Edit-32.png' alt='Editar'></a></td>";
				echo "<td><a onClick=\"javascript: return confirm('Excluir cliente?');\" href='customerdelete.php?id=".$row['codigo']."'><img src='./images/icons8-Trash-32.png' alt='Remover'></a></td><tr>"; //use double quotes for js inside php!

				echo "</tr>";
			}
			echo "</table>";

			mysqli_close($mysqli);
		?>
	</div>
</body>
</html> 