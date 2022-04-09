<?php
setlocale(LC_ALL, 'es_es');
$mysqli = new mysqli('localhost', 'mundial', 'Aj0jwttg88!', 'mundial');
if ($mysqli->connect_error) {
    die('Error de Conexión (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}
$groups = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H');
$id = $_POST['partido'];
//$id = 1;
$query = "SELECT * FROM fasedegrupos WHERE id='".$id."'";
$resquery = $mysqli->query($query);
$rowquery = $resquery->fetch_assoc();
$query_a = "SELECT * FROM `equipos` WHERE`id`='".$rowquery['equipoa']."'";
$res_query_a = $mysqli->query($query_a);
$row_query_a = $res_query_a->fetch_assoc();
$query_b = "SELECT * FROM `equipos` WHERE`id`='".$rowquery['equipob']."'";
$res_query_b = $mysqli->query($query_b);
$row_query_b = $res_query_b->fetch_assoc();
$query_place = "SELECT * FROM `estadios` WHERE id='".$rowquery['place']."'";
$res_query_place = $mysqli->query($query_place);
$row_query_place = $res_query_place->fetch_assoc();
?>
    <form method="post">
        <div>
            <p><h2><?php echo $row_query_a['nombre']; ?> vs <?php echo $row_query_b['nombre']; ?></h2></p>
            <p><h3><?php echo date("D M j G:i:s", strtotime($rowquery['fechayhora']));?></h3></p>
            <p><a href="javascript:displayResultBlock();">Cargar resultados</a></p>
            <p><?php echo $row_query_place['nombre']; ?></p>
            <p><iframe src="<?php echo $row_query_place['test']; ?>" width="300" height="225" style="border:1;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
        </div>
    </form> 
    <div id="resultBlock" style="display:none;">
        <form action="" method="post">
            <input type="hidden" name="equipoa" value="<?php echo $row_query_a['id']; ?>">
            <input type="hidden" name="equipob" value="<?php echo $row_query_b['id']; ?>">
            <p><b><?php echo $row_query_a['nombre']; ?></b> <input type="number" name="result_a" id="result_a" min="0" style="width:30px;" onkeyup="javascript:displayResult('<?php echo $row_query_a['nombre']; ?>','<?php echo $row_query_b['nombre']; ?>');" onkeydown="javascript:displayResult('<?php echo $row_query_a['nombre']; ?>','<?php echo $row_query_b['nombre']; ?>');" onkeypress="javascript:displayResult('<?php echo $row_query_a['nombre']; ?>','<?php echo $row_query_b['nombre']; ?>');"></p>
            <p><b><?php echo $row_query_b['nombre']; ?></b> <input type="number" name="result_b" id="result_b" min="0" style="width:30px;" onkeyup="javascript:displayResult('<?php echo $row_query_a['nombre']; ?>','<?php echo $row_query_b['nombre']; ?>');" onkeydown="javascript:displayResult('<?php echo $row_query_a['nombre']; ?>','<?php echo $row_query_b['nombre']; ?>');" onkeypress="javascript:displayResult('<?php echo $row_query_a['nombre']; ?>','<?php echo $row_query_b['nombre']; ?>');"></p>
            <?php
                
            ?>
            <input type="hidden" id="ganador" name="ganador" value="" />
            <div id="div_match_result">
                
            </div>
        </form>
    </div>