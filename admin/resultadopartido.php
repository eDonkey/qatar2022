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
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        function displayResult(teama,teamb) {
            var score_a = document.getElementById('result_a').value;
            var score_b = document.getElementById('result_b').value;
            var show_result = document.getElementById('div_match_result');
            var ganador = document.getElementById('ganador');
            if ( score_a < score_b ) {
                show_result.innerHTML = "Ganador: " + teamb;
                ganador.value = teamb;
            } else if ( score_b < score_a ) {
                show_result.innerHTML = "Ganador: " + teama;
                ganador.value = teama;
            } else if ( score_b === score_a ) {
                show_result.innerHTML = "Empate";
                ganador.value = "empate";
            } else {
                show_result.innerHTML = "Error!";
            }
        }
        function displayResultBlock() {
            document.getElementById('resultBlock').style.display = "";
        }
        $(document).ready(function() {
            $('#resultados').submit(function() { // catch the form's submit event
                $.ajax({ // create an AJAX call...,
                    data: $(this).serialize(), // get the form data
                    type: $(this).attr('method'), // GET or POST
                    url: 'retrievedata.php', // the file to call
                    success: function(response) { // on success..
                        $('#created').html(response); // update the DIV
                    }
                });
                return false; // cancel original event to prevent form submitting
            });
        });
    </script>
</head>
<body>
    <form id="resultados" method="post">
        <select name="partido" title="partido">
            <?php
            $query_partidos = "SELECT id, equipoa, equipob, grupo FROM `fasedegrupos`";
            $res_query_partidos = $mysqli->query($query_partidos);
            while ( $row_query_partidos = $res_query_partidos->fetch_assoc() ) {
                $query_teama = "SELECT * FROM `equipos` WHERE`id`='".$row_query_partidos['equipoa']."'";
                $res_query_teama = $mysqli->query($query_teama);
                $row_query_teama = $res_query_teama->fetch_assoc();
                $query_teamb = "SELECT * FROM `equipos` WHERE`id`='".$row_query_partidos['equipob']."'";
                $res_query_teamb = $mysqli->query($query_teamb);
                $row_query_teamb = $res_query_teamb->fetch_assoc();
            ?>
            <option id="<?php echo $row_query_partidos['id']; ?>" value="<?php echo $row_query_partidos['id']; ?>"><?php echo $row_query_teama['nombre']; ?> - <?php echo $row_query_teamb['nombre']; ?> - Grupo <?php echo $row_query_partidos['grupo']; ?></option>
            <?php
            }
            ?>
        </select>
        <input type="submit" value="Cargar Data" />
    </form>
    <div id=created></div>
</body>
</html>