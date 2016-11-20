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
    <!--<script language="javascript">
        $(window).scroll(function() {
          if ($(this).scrollTop() > 50) {
                      $('.topnav').addClass('fix');
              } else {
                  $('.topnav').removeClass('fix');
              }
      });
    </script>-->
    <script>
    function showUser(str) {
        if (str == "") {
            document.getElementById("txtHint").innerHTML = "";
            return;
        } else { 
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET","get_curso.php?q="+str,true);
            xmlhttp.send();
        }
    }
    function showProyecto(str){
      if (str == "") {
            document.getElementById("txtHint").innerHTML = "";
            return;
        } else { 
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET","get_proyectos.php?q="+str,true);
            xmlhttp.send();
        }
    }
    </script>
  </head>
  
<body>
    <ul class="topnav">
      <li><a href="index.php">Home</a></li>
      <li><a class="active" href="portafolio.php">Portafolio de Proyectos</a></li>
      <li><a href="infopersonal.php">Información Personal</a></li>
      <li><a href="contacto.php">Contacto</a></li>
    </ul>

    
    <form>
      <div id="select">
        <div class="header">
          <img src="http://cipoint.monterozas.es/images/curso.png" alt="logo" />
          <h1>Cursos</h1>
        </div><br><br><br>

        <font><label>Ver Cursos por año </label></font>
        <div class="select_style">     
          <select name="users" onchange="showUser(this.value)">
            <option value="">Seleccione un Año:</option>
            <option value="2012">2012</option>
            <option value="2013">2013</option>
            <option value="2014">2014</option>
            <option value="2015">2015</option>
            <option value="2016">2016</option>
          </select>
          <span></span>
        </div>
        <div id="txtHint"><b>La información seleccionada se mostrara en este lugar...</b></div>
      </div>
    </form>
  <br>

  <div id="select-2">
    <div class="header">
        <img src="http://proyectosunac.com/assets/img/Proyectos.png" alt="logo" />
        <h1>Proyectos</h1>
    </div><br><br><br>
    <?php  
      $start=0;
      $limit=4;

      if(isset($_GET['id']))
      {
        $id=$_GET['id'];
        $start=($id-1)*$limit;
      }
      else{
        $id=1;
      }
      //Fetch from database first 10 items which is its limit. For that when page open you can see first 10 items.
      $sql = "SELECT c.nombre_curso, p.nombre_proyecto, p.descripcion,p.tecnología_usada FROM curso c INNER JOIN proyecto p ON c.id_curso=p.id_curso LIMIT $start, $limit"; 
      $query = mysqli_query($connection,$sql);
    ?>

    <table class='demo'>
        <tr>
          <th>Nombre Curso</th>
          <th>Nombre Proyecto</th>
          <th>Descripción</th> 
          <th>Tecnología Usada</th>
        </tr>
    <?php
      //print 10 items
      while($result = mysqli_fetch_array($query))
      {
        echo "<tr>";

            echo '<td>' . $result['nombre_curso'] . '</td>';
            
            echo '<td>' . $result['nombre_proyecto'] . '</td>';

            echo '<td>' . $result['descripcion'] . '</td>';

            echo '<td>' . $result['tecnología_usada'] . '</td>';

        echo "</tr>";
      }
    ?>
    </table>
    <div class="pagination clearfix">
    <?php
      //fetch all the data from database.
      $rows = mysqli_num_rows(mysqli_query($connection,"select * from `proyecto`"));
      //calculate total page number for the given table in the database 
      $total=ceil($rows/$limit);
      if($id>1)
      {
        //Go to previous page to show previous 10 items. If its in page 1 then it is inactive
        echo "<a href='?id=".($id-1)."'>Anterior</a>";
        //echo "<a href='?id=".($id-1)."' class='button'>Anterior</a>";
      }
      if($id!=$total)
      {
        ////Go to previous page to show next 10 items.
        echo "<a href='?id=".($id+1)."'>Siguiente</a>";
        //echo "<a href='?id=".($id+1)."' class='button'>Siguiente</a>";
      }
    ?>
    <?php
    //show all the page link with page number. When click on these numbers go to particular page. 
        for($i=1;$i<=$total;$i++)
        {
          if($i==$id) { 
            echo "<a href='#'>".$i."</a>"; 
          }
          else { 
            echo "<a href='?id=".$i."'>".$i."</a>"; 
          }
        }
    ?>
    </div>    
  </div>

</body>
</html>