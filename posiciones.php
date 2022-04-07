<?php
setlocale(LC_ALL, 'es_es');
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
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap');
        font-family: 'Ubuntu', sans-serif;
        table.fixed { table-layout:fixed; }
        table.fixed td { overflow: hidden; }
        
    </style>
</head>
<body>
    <table style="border: 1px solid red;">
        <tr>
        <?php
        //for ($i = 0; $i <= 0; $i++) {
            $cnt = 0;
        for ($i = 0; $i <= count($groups)-1; $i++) {
            $query = "SELECT * FROM `equipos` WHERE `grupo`='".$groups[$i]."'";
            $res = $mysqli->query($query);
        ?>
        <td>
            <table class="fixed" style="border:2px solid blue;">
                <col width="100px" />
                <tr>
                    <th>Equipo</th>
                    <th>PJ</th>
                    <th>PG</th>
                    <th>PE</th>
                    <th>PP</th>
                    <th>Puntos</th>
                </tr>
                <?php
            while ($rows = $res->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $rows['nombre']; ?></td>
                    <td style="text-align:center"><?php echo $rows['pj']; ?></td>
                    <td style="text-align:center"><?php echo $rows['pg']; ?></td>
                    <td style="text-align:center"><?php echo $rows['pe']; ?></td>
                    <td style="text-align:center"><?php echo $rows['pp']; ?></td>
                    <td style="text-align:center"><?php echo $rows['puntos']; ?></td>
                </tr>
         <?php        
            }
            ?>
            </table>
        </td>
            <?php
            $cnt++;
            if ( $cnt == 4 ) {
                echo "</tr><tr>";
            }
        }
        ?>

        </tr>
    </table>
</body>
</html>