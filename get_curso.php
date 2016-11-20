<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styles/estilo_index.css">
    <link rel="stylesheet" type="text/css" href="styles/estilo_contacto.css">
    <link rel="stylesheet" type="text/css" href="styles/estilo_portafolio.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<?php 
  
  	include_once ('connection_db.php');
  	$connection = db_connect();

  	$default = 2016;

  	$q = intval($_GET['q']);

	$sql = "SELECT c.nombre_curso, p.nombre_profesor, c.dia, TIME_FORMAT(c.hora,'%r'),c.ano FROM curso c INNER JOIN profesores p ON c.id_profesor = p.id_profesor WHERE c.ano = '".$q."'";
            $result = mysqli_query($connection, $sql);

	echo "<table class='demo'>
			<tr>
				<th>Curso</th>
				<th>Profesor</th>
				<th>Dia</th>
				<th>Hora</th>
				<th>Ano</th>
			</tr>";
	if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
          foreach($row as $key=>$value) {
            echo '<td>',$value,'</td>';
          }
          echo '</tr>';
        }
    } else {
        echo "No hay resultados";
    }
	echo "</table>";
?>
</body>
</html>
