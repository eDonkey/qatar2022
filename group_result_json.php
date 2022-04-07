<?php
$mysqli = new mysqli('localhost', 'mundial', 'Aj0jwttg88!', 'mundial');
if ($mysqli->connect_error) {
    die('Error de Conexión (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}
$grupo = $_POST['grupo'];
$counter = 0;
foreach ($_POST as $key => $value) {
    if ($counter == 0) {
        $uid = $value;
        $data = array($uid);
        $counter++;
    } else { 
        $data[$uid][$key] = $value;
        $counter++;
    }
}
unset($data[0]);
unset($data[$uid]['grupo']);
$jsonData = $mysqli->real_escape_string(json_encode($data));
$query = "INSERT INTO `fasedegrupos_resultados` (`id`, `userid`, `grupo`, `resultados`, `creado`) VALUES (NULL, '".$uid."', '".$grupo."', '".$jsonData."', CURRENT_TIMESTAMP)";
$mysqli->query($query) or die("Error! ".$mysqli->connect_error);
?>