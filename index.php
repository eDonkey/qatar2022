<?php
$mysqli = new mysqli('localhost', 'cordiak', 'Aj0jwttg88!', 'mundial');
if ($mysqli->connect_error) {
    die('Error de Conexión (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}
$groups = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H');
for ($i = 0; $i <= 7; $i++) {
	$query = "SELECT * FROM `equipos` WHERE grupo='".$groups[$i]."'";
	$res = $mysqli->query($query);
	echo "<b>Grupo ".$groups[$i].":</b><br />";
	while ($res_parsed = $res->fetch_assoc() ) {
		echo $res_parsed["nombre"];
		echo "&nbsp;<img src=".$res_parsed["flag"]." />";
		echo "<br />";	
	}
	echo "<hr />";
}
?>
