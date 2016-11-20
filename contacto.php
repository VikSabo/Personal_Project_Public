<?php 
	include_once ('connection_db.php');

	$connection = db_connect();

  	//When user press the submit button
  	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	    //user name and password sent from form
	    
	    $nombreContacto = mysqli_real_escape_string($connection, $_POST['nombre']);
	    $apellidoContacto = mysqli_real_escape_string($connection,$_POST['apellido']);
	    $emailContacto = mysqli_real_escape_string($connection,$_POST['email']);
	    $selectTipoConsulta = mysqli_real_escape_string($connection,$_POST['tipo']);
	    $selectContactarTel = mysqli_real_escape_string($connection,$_POST['check']);
	    $numeroTel = $_POST['numbercliente'];
	    $consulta = mysqli_real_escape_string($connection,$_POST['consulta']);

	    if ($nombreContacto == "" || $apellidoContacto == "" || $emailContacto == "" || $selectTipoConsulta == "" || $consulta == "") {
	    	echo "<div class='error'>Error: Debes llenar todos los campos con *</div>";
	    } else {
	    	// Query to insert data
	    	if ($selectContactarTel == NULL) {
	    		$selectContactarTel = "no";
	    	}
		    $sql = "INSERT INTO `contacto`(`nombre_contacto`, `apellido_contacto`, `email`, `tipo_consulta`, `llamar_telefono`, `telefono_contacto`, `consulta`) VALUES ('$nombreContacto', '$apellidoContacto', '$emailContacto', '$selectTipoConsulta', '$selectContactarTel', '$numeroTel', '$consulta')";

		    // Insert the data if the query its ok
		    if ($connection->query($sql) === TRUE) {
		        echo "<div class='success'>El mensaje se ha enviado correctamente</div>";
		    } else {
		        echo "Error: " . $sql . "<br>" . $connection->error;
		    }
	    }
  	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="styles/estilo_index.css">
		<link rel="stylesheet" type="text/css" href="styles/estilo_contacto.css">
		<link rel="stylesheet" type="text/css" href="styles/estilo_general.css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
  		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
  		<script type="text/javascript" src="js/funciones.js"></script>

		<title>Contácto</title>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	    <script language="javascript">
	        $(window).scroll(function() {
	          	if ($(this).scrollTop() > 50) {
                  	$('.topnav').addClass('fix');
              	} else {
                  	$('.topnav').removeClass('fix');
              	}

		      	$("#numbercliente").hide();
				$("#coupon_question").click(function() {
				    if($(this).is(":checked")) {
				        $("#numbercliente").show();
				    } else {
				        $("#numbercliente").hide();
				    }
				});
	      	});
	    </script>
	</head>

	<body>
        <ul class="topnav" id="myTopnav">
          <li><a href="index.php">Home</a></li>
          <li><a href="portafolio.php">Portafolio de Proyectos</a></li>
          <li><a href="infopersonal.php">Información Personal</a></li>
          <li><a class="active" href="contacto.php" >Contacto</a></li>
          <li class="icon">
            <a href="javascript:void(0);" style="font-size:15px;" onclick="responsiveToggle()">☰</a>
          </li>
        </ul>
		<h1 id="fuenteh1">Contáctame- Víctor Saborío H</h1>

		<div align="center">
			<div  class="cuadro" align="center">
				<form action="" method="post">
					<label>Nombre*:</label><br>
					<input type="text" name="nombre" placeholder="Nombre"> <br> <br>
					<label>Apellido*:</label><br>
					<input type="text" name="apellido" placeholder="Apellido"> <br> <br>
					<label>Correo Electrónico*:</label><br>
					<input type="email" name="email" placeholder="Correo electrónico"><br><br>

					<label>Tipo de consulta*:</label><br>
					<input type="radio" name="tipo" value="infopersonal" checked> Información personal<br>
					<input type="radio" name="tipo" value="portafolio"> Portafolio de Proyectos<br>
					<input type="radio" name="tipo" value="vocacional"> Orientación Vocacional<br><br>

					<input name="check" value="no" type="hidden">
					<input type="checkbox" id="coupon_question" name="check" value="si"> 
					<label> ¿Desea que lo contacte vía telefónica? </label><br>
					<input type="number" id="numbercliente" name="numbercliente" placeholder="Número telefónico"> <br><br>

					<label>Consulta*:</label><br>
					<textarea rows="4" cols="50" name="consulta" placeholder="Ingrese la consulta (Máximo 500 caracteres)"></textarea>

					<br><br>
					<input class="button" type="submit">
				</form>
			</div>
		</div>
	</body>	
</html>
