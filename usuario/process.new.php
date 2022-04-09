<?php
$mysqli = new mysqli('localhost', 'mundial', 'Aj0jwttg88!', 'mundial');
if ($mysqli->connect_error) {
    die('Error de Conexión (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}
$groups = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H');
$nombre = $mysqli->real_escape_string($_POST['nombre']);
$apellido = $mysqli->real_escape_string($_POST['apellido']);
$email = $mysqli->real_escape_string($_POST['email']);
$password = $mysqli->real_escape_string(md5($_POST['password']));
//$query = "INSERT INTO 'usuarios' SET nombre='$nombre', apellido='$apellido', email='$email', password='$password'";
$query = "INSERT INTO `usuarios`(`nombre`, `apellido`, `email`, `password`) VALUES ('$nombre','$apellido','$email','$password')";
//die(var_dump($query));
$mysqli->query($query) or die("Error al crear usuario insertando en la tabla Usuarios");
$getuserid = "SELECT id FROM `usuarios` WHERE `nombre`='$nombre' AND `apellido`='$apellido' AND `email`='$email' AND `password`='$password' LIMIT 1";
$res_getuserid = $mysqli->query($getuserid);
$row_getuserid = $res_getuserid->fetch_assoc();
$userid = $row_getuserid['id'];
echo "Usuario creado correctamente </br>";
echo "Creando registros primarios <br />";
$matchid = 1;
for ($i=0;$i<=7;$i++) {
    for ($e=1;$e<=6;$e++) {
        $query_insert_result = "INSERT INTO `fasedegrupos_resultados`(`userid`, `grupo`, `id_partido`, `equipoa_score`, `equipob_score`) VALUES 
        ('$userid','$groups[$i]','$matchid',0,0)";
        $mysqli->query($query_insert_result) or die("Error al insertar resultado de partido id ".$matchid);
        $matchid++;
    }
}
echo "Registros primarios creados correctamente";
?>