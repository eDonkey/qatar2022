<?php
$mysqli = new mysqli('localhost', 'mundial', 'Aj0jwttg88!', 'mundial');
if ($mysqli->connect_error) {
    die('Error de Conexión (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}
$groups = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<?php include("usuario/session.php"); ?>
	<table style="border:1px solid black">
		<tr style="border: 1px solid black">
<?php
$nextrow = 1;
for ($i = 0; $i <= 7; $i++) {
	$query = "SELECT * FROM `equipos` WHERE grupo='".$groups[$i]."'";
	$res = $mysqli->query($query);
	echo "<td style='border: 1px solid black' width='200px' height='150px'>Grupo ".$groups[$i].":</b><br />";
	while ($res_parsed = $res->fetch_assoc() ) {
		echo $res_parsed["nombre"];
		echo "&nbsp;<img src=".$res_parsed["flag"]." />";
		echo "<br />";	
	}
	if ($nextrow == 4) {
		echo "</tr><tr>";
		$nextrow = 1;
	} else {
		$nextrow++;
	}
	echo "</td>";
}
?>
		</tr>
	</table>
</body>
</html>
