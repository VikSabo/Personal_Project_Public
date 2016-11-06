<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="styles/estilo_index.css">
		<link rel="stylesheet" type="text/css" href="styles/estilo_contacto.css">
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
	      });
	    </script>
	</head>

	<body>
        <ul class="topnav" id="myTopnav">
          <li><a href="index.php">Home</a></li>
          <li><a href="portafolio.php">Portafolio de Proyectos</a></li>
          <li><a href="personal_information.php">Información Personal</a></li>
          <li><a class="active" href="contacto.php" >Contacto</a></li>
          <li class="icon">
            <a href="javascript:void(0);" style="font-size:15px;" onclick="responsiveToggle()">☰</a>
          </li>
        </ul>
		<h1>Contáctame- Víctor Saborío H</h1>

		<div class="lines"></div>
		<div align="center" class="list">
			<form action="" method="post">
				<label>Nombre:</label><br>
				<input type="text" name="name" placeholder="Nombre"> <br> <br>
				<label>Apellido:</label><br>
				<input type="text" name="lastName" placeholder="Apellido"> <br> <br>
				<label>Correo Electrónico:</label><br>
				<input type="email" name="email" placeholder="Correo electrónico"><br><br>

				<label>Tipo de consulta:</label><br>
				<input type="radio" name="gender" value="male" checked> Información personal<br>
				<input type="radio" name="gender" value="female"> Portafolio de Proyectos<br>
				<input type="radio" name="gender" value="other"> Orientación Vocacional<br><br>

				<input type="checkbox" name="check" value="yes"> 
				<label> ¿Desea que lo contacte vía telefónica? </label><br>
				<input type="number" name="numbercliente" placeholder="Número telefónico"> <br><br>

				<label>Consulta:</label><br>
				<textarea rows="4" cols="50" name="comment" placeholder="Ingrese la consulta (Máximo 500 caracteres)"></textarea>

				<br><br>
				<input class="button" type="submit">
		</form>
		</div>
		

		<br><br>
		<a href="index.html">Regresar</a>

	</body>	
</html>
