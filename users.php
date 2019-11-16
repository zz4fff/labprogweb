<?php
	include("session.php");
	include("config.php");
?>

<!-- INSERT INTO `usuarios` (`id`, `firstname`, `middlename`, `lastname`, `birthdate`, `username`, `password`) VALUES (NULL, 'Flavio', 'Augusto de', 'Freitas', '2019-05-05', 'usuario', 'e10adc3949ba59abbe56e057f20f883e') -->

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/mystyle.css" /> 
</head>

<body>
<?php
include("menu.php");
show_menu("users");
?>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<h2>Usuários</h2>
	<hr/>
	<div class="container">
		<?php $c = 0; ?>
		<?php
			$result = $mysqli->query("SELECT * FROM usuarios");

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
				echo "<td><a href='useredit.php?id=".$row['id']."'><img src='./images/icons8-Edit-32.png' alt='Editar'></a></td>";
				echo "<td><a onClick=\"javascript: return confirm('Excluir usuário?');\" href='userdelete.php?id=".$row['id']."'><img src='./images/icons8-Trash-32.png' alt='Remover'></a></td><tr>"; //use double quotes for js inside php!
				echo "</tr>";
			}
			echo "</table>";

			mysqli_close($mysqli);
		?>
	</div>
</body>
</html> 