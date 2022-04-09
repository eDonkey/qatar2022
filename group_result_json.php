<?php
$mysqli = new mysqli('localhost', 'mundial', 'Aj0jwttg88!', 'mundial');
if ($mysqli->connect_error) {
    die('Error de Conexión (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}
$grupo = $_POST['grupo'];
$userid = $_POST['userid'];
$grupo = $_POST['grupo'];
if ( $grupo == "A" ) {
    for ( $i=1; $i <= 6; $i++) {
        $equipoascore = $_POST['match'][$i]['team_a'];
        $equipobscore = $_POST['match'][$i]['team_b'];
        $query = "UPDATE `fasedegrupos_resultados` SET `equipoa_score`='$equipoascore',`equipob_score`='$equipobscore' WHERE `userid`='$userid' AND `id_partido`='$i' AND `grupo`='$grupo'";
        $mysqli->query($query);
    }
} elseif ( $grupo == "B" ) {
    for ($i=7;$i<=12;$i++) {
        $equipoascore = $_POST['match'][$i]['team_a'];
        $equipobscore = $_POST['match'][$i]['team_b'];
        $query = "UPDATE `fasedegrupos_resultados` SET `equipoa_score`='$equipoascore',`equipob_score`='$equipobscore' WHERE `userid`='$userid' AND `id_partido`='$i' AND `grupo`='$grupo'";
        $mysqli->query($query);
    }
} elseif ( $grupo == "C" ) {
    for ($i=13;$i<=18;$i++) {
        $equipoascore = $_POST['match'][$i]['team_a'];
        $equipobscore = $_POST['match'][$i]['team_b'];
        $query = "UPDATE `fasedegrupos_resultados` SET `equipoa_score`='$equipoascore',`equipob_score`='$equipobscore' WHERE `userid`='$userid' AND `id_partido`='$i' AND `grupo`='$grupo'";
        $mysqli->query($query);
    }
} elseif ( $grupo == "D" ) {
    for ($i=19;$i<=24;$i++) {
        $equipoascore = $_POST['match'][$i]['team_a'];
        $equipobscore = $_POST['match'][$i]['team_b'];
        $query = "UPDATE `fasedegrupos_resultados` SET `equipoa_score`='$equipoascore',`equipob_score`='$equipobscore' WHERE `userid`='$userid' AND `id_partido`='$i' AND `grupo`='$grupo'";
        $mysqli->query($query);
    }
} elseif ( $grupo == "E" ) {
    for ($i=25;$i<=30;$i++) {
        $equipoascore = $_POST['match'][$i]['team_a'];
        $equipobscore = $_POST['match'][$i]['team_b'];
        $query = "UPDATE `fasedegrupos_resultados` SET `equipoa_score`='$equipoascore',`equipob_score`='$equipobscore' WHERE `userid`='$userid' AND `id_partido`='$i' AND `grupo`='$grupo'";
        $mysqli->query($query);
    }
} elseif ( $grupo == "F" ) {
    for ($i=31;$i<=36;$i++) {
        $equipoascore = $_POST['match'][$i]['team_a'];
        $equipobscore = $_POST['match'][$i]['team_b'];
        $query = "UPDATE `fasedegrupos_resultados` SET `equipoa_score`='$equipoascore',`equipob_score`='$equipobscore' WHERE `userid`='$userid' AND `id_partido`='$i' AND `grupo`='$grupo'";
        $mysqli->query($query);
    }
} elseif ( $grupo == "G" ) {
    for ($i=37;$i<=42;$i++) {
        $equipoascore = $_POST['match'][$i]['team_a'];
        $equipobscore = $_POST['match'][$i]['team_b'];
        $query = "UPDATE `fasedegrupos_resultados` SET `equipoa_score`='$equipoascore',`equipob_score`='$equipobscore' WHERE `userid`='$userid' AND `id_partido`='$i' AND `grupo`='$grupo'";
        $mysqli->query($query);
    }
} elseif ( $grupo == "H" ) {
    for ($i=43;$i<=48;$i++) {
        $equipoascore = $_POST['match'][$i]['team_a'];
        $equipobscore = $_POST['match'][$i]['team_b'];
        $query = "UPDATE `fasedegrupos_resultados` SET `equipoa_score`='$equipoascore',`equipob_score`='$equipobscore' WHERE `userid`='$userid' AND `id_partido`='$i' AND `grupo`='$grupo'";
        $mysqli->query($query);
    }
} else {
    echo "Error. Grupo inexistente";
}
?>