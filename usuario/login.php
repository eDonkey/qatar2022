<?php
$mysqli = new mysqli('localhost', 'mundial', 'Aj0jwttg88!', 'mundial');
if ($mysqli->connect_error) {
    die('Error de Conexión (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}
$email = $mysqli->real_escape_string($_POST['email']);
$password = $mysqli->real_escape_string(md5($_POST['password']));
$query = "SELECT * FROM `usuarios` WHERE `email`='$email' AND `password`='$password' LIMIT 1";
$result = $mysqli->query($query);
$usrexist = $result->num_rows;
if ( $usrexist === 1 ) {
    $row_result = $result->fetch_assoc();
    //die(var_dump($row_result));
    session_start();
    $_SESSION['id'] = $row_result['id'];
    $_SESSION['nombre'] = $row_result['nombre'];
    $_SESSION['email'] = $row_result['email'];
    $_SESSION['token'] = md5($row['password'].rand(1111,55555555));
    header("Location: ".$_POST['_ref']);
} else {
    echo "Usuario doesn't exist";
    die();
}
?>