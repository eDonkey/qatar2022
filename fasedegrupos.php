<?php
include("usuario/session.php");
if (!isset($_SESSION['id'])) {
	die("Can not access here");
}
setlocale(LC_ALL, 'es_es');
$mysqli = new mysqli('localhost', 'mundial', 'Aj0jwttg88!', 'mundial');
if ($mysqli->connect_error) {
    die('Error de Conexión (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}
$groups = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H');
$uid = $_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
	<title>Fase de Grupos</title>
</head>
<body>
	<table>
	<?php
	for ($i = 0; $i <= count($groups)-1; $i++) {
	//for ($i = 0; $i <= 0; $i++) {
		$query = "SELECT * FROM `fasedegrupos` WHERE `grupo`='".$groups[$i]."'";
		$res = $mysqli->query($query);
		$query_result = "SELECT * FROM `fasedegrupos_resultados` WHERE `grupo`='".$groups[$i]."' and userid='34255385'";
		$res_query_result = $mysqli->query($query_result);
		$resultados_grupo_A = $res_query_result->fetch_assoc();
		echo "<th colspan='6'>Grupo ".$groups[$i]."</th>";
		?>
		<tr>
			<form method="post" action="group_result_json.php">
		<?php
		while ($rows = $res->fetch_assoc()) {

			$queryteam_a = "SELECT * FROM `equipos` WHERE id='".$rows['equipoa']."' LIMIT 1";
			$res_queryteam_a = $mysqli->query($queryteam_a);
			$rows_queryteam_a = $res_queryteam_a->fetch_assoc();
			$queryteam_b = "SELECT * FROM `equipos` WHERE id='".$rows['equipob']."' LIMIT 1";
			$res_queryteam_b = $mysqli->query($queryteam_b);
			$rows_queryteam_b = $res_queryteam_b->fetch_assoc();
			$queryestadio = "SELECT * FROM `estadios` WHERE id='".$rows['place']."' LIMIT 1";
			$res_queryestadio = $mysqli->query($queryestadio);
			$rows_queryestadio = $res_queryestadio->fetch_assoc();
			$matchid = $rows['id'];
			$query_saved_result = "SELECT * FROM `fasedegrupos_resultados` WHERE userid='$uid' AND grupo='$groups[$i]' AND id_partido='$matchid' LIMIT 1";
			//die(var_dump($query_saved_result));
			$res_query_saved_result = $mysqli->query($query_saved_result);
			$rows_saved_result = $res_query_saved_result->fetch_assoc();
		?>
		<input type="hidden" name="match[<?php echo $rows['id']; ?>]" id="match[<?php echo $rows['id']; ?>]" value="match[<?php echo $rows['id']; ?>]" />
		<input type="hidden" name="userid" id="userid" value="<?php echo $uid; ?>" />
		<input type="hidden" name="grupo" id="grupo" value="<?php echo $groups[$i]; ?>" />
			<td style="text-align:center;" width="250px" height="150px">
				<img src="<?php echo $rows_queryteam_a['flag']; ?>" title="<?php echo $rows_queryteam_a['nombre']; ?>" />&nbsp;&nbsp;&nbsp;&nbsp;<img src="imgs/versus.png" />&nbsp;&nbsp;&nbsp;&nbsp;<img src="<?php echo $rows_queryteam_b['flag']; ?>" title="<?php echo $rows_queryteam_b['nombre']; ?>" /><br />
				<input type="number" value="<?php echo $rows_saved_result['equipoa_score']?>" name="match[<?php echo $rows['id']; ?>][team_a]" id="match[<?php echo $rows['id']; ?>][team_a]" min="0" style="width:30px;" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" value="<?php echo $rows_saved_result['equipob_score']?>" name="match[<?php echo $rows['id']; ?>][team_b]" id="match[<?php echo $rows['id']; ?>][team_b]" min="0" style="width:30px;" /><br>
				<?php echo date("D M j G:i:s", strtotime($rows['fechayhora'])); ?><br />
				Estadio: <a href="<?php echo $rows_queryestadio['mapsurl']; ?>" target="_blank"><?php echo $rows_queryestadio['nombre']; ?></a>
			</td>		
<?php 	} ?>
	</tr>
	<tr>
		<td colspan="6" style="text-align:center;">
			<input type="submit" value="Guardar" <?php if ($uid === 0) { echo "disabled"; } ?>/>
		</td>
	</form>
		</tr>
<?php } ?>
	</table>
</body>
</html>