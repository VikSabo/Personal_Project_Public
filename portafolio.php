<?php 
  
  include_once ('connection_db.php');

  $connection = db_connect();

  

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styles/estilo_index.css">
    <link rel="stylesheet" type="text/css" href="styles/estilo_contacto.css">
    <link rel="stylesheet" type="text/css" href="styles/estilo_portafolio.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script language="javascript">
        $(window).scroll(function() {
          if ($(this).scrollTop() > 50) {
                      $('.topnav').addClass('fix');
              } else {
                  $('.topnav').removeClass('fix');
              }
      });
    </script>
  </head>
  
  <body>
    <ul class="topnav">
      <li><a href="index.php">Home</a></li>
      <li><a class="active" href="portafolio.php">Portafolio de Proyectos</a></li>
      <li><a href="personal_information.php">Información Personal</a></li>
      <li><a href="contacto.php">Contacto</a></li>
    </ul>

    <div id="fuente-1">
      Víctor Saborío H
    </div>

    <div id="fuente-2" align="center">
      Semestre Actual:  
    </div>

    <div>
      <div align="center">
        <table class="demo">
          <tr>
            <th>Curso</th>
            <th>Profesor</th> 
            <th>Días</th>
            <th>Hora</th>
            <th>Año</th>
          </tr>
          <?php 
            $sql = "SELECT c.nombre_curso, p.nombre_profesor, c.dia, TIME_FORMAT(c.hora,'%r'),c.ano FROM curso c INNER JOIN profesores p ON c.id_profesor = p.id_profesor";
            $result = mysqli_query($connection, $sql);


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
                echo "0 results";
            }
          ?>
        </table>
      </div>
    </div>
  
    <br>
    <hr class="style-eight">
    <br>
    <div align="center">
      <h1>Portafolio de proyectos:</h1>  
    </div>

    <div>
      <div align="center">
        <table class="demo">
          <tr>
            <th>Nombre Curso</th>
            <th>Nombre Proyecto</th>
            <th>Descripción</th> 
            <th>Tipo Proyecto</th>
            <th>Tecnología Usada</th>
            <th>Duración</th>
          </tr>
          <?php 
            $sql = "SELECT c.nombre_curso, p.nombre_proyecto, p.descripcion,p.tipo_proyecto,p.tecnología_usada, p.duración FROM curso c INNER JOIN proyecto p ON c.id_curso=p.id_curso";
            $result = mysqli_query($connection, $sql);


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
                echo "0 results";
            }
          ?>
        </table>
      </div>
    </div>
    <br>
  
  </body>
</html>