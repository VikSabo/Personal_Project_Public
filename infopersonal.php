<?php
  include_once ('connection_db.php');
  $connection = db_connect();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Información personal</title>

  		<link rel="stylesheet" type="text/css" href="styles/estilo_index.css">
  		<link rel="stylesheet" type="text/css" href="styles/estilo_infopersonal.css">
  		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
  		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
  		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js">
  		</script>
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
	<div>
        <ul class="topnav">
          <li><a href="index.php">Home</a></li>
          <li><a href="portafolio.php">Portafolio de Proyectos</a></li>
          <li><a class="active" href="infopersonal.php">Información Personal</a></li>
          <li><a href="contacto.php">Contacto</a></li>
        </ul>
    </div>

    <div class="header">
      <img src="img_perfil/mii.jpg" alt="perfil" style="width:151px;height:128px;" class="circular_shadow">
      <h1>Bienvenido</h1><br>
    </div><br><br>

    <div id="wide">
    	<div id="alinear">
    		<font color="white"><h1>Intereses personales</h1></font>
	    	<ul class="ul">
		    	<?php 
		    		$sql = "SELECT `intereses_personales` FROM `preferencias`";
		              $result = mysqli_query($connection, $sql);

		              if (mysqli_num_rows($result) > 0) {
		                  // output data of each row
		                  while($row = mysqli_fetch_assoc($result)) {
		                      echo '<li class="li">';
		                    foreach($row as $key=>$value) {
		                      echo $value;
		                    }
		                    echo '</li>';
		                  }
		              } else {
		                  echo "0 results";
		              }
		    	?>
		    </ul>
	    </div>
	    <div id="alinear">
	    	<font color="white"><h1>Hobbies</h1></font>
		    <ul class="ul">
		    	<?php 
		    		$sql = "SELECT `hobbies` FROM `preferencias`";
		              $result = mysqli_query($connection, $sql);

		              if (mysqli_num_rows($result) > 0) {
		                  // output data of each row
		                  while($row = mysqli_fetch_assoc($result)) {
		                      echo '<li class="li">';
		                    foreach($row as $key=>$value) {
		                      echo $value;
		                    }
		                    echo '</li>';
		                  }
		              } else {
		                  echo "0 results";
		              }
		    	?>
			</ul>
		</div>	
    </div>

</body>
</html>