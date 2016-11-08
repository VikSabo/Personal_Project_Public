<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Mi página personal</title>
  <link rel="stylesheet" type="text/css" href="styles/estilo_index.css">
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/4.10.1/bootstrap-social.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

  <script type="text/javascript" src="js/funciones.js"></script>

</head>
 
<body>
    <div id="wrapper" >
        
        <ul class="topnav" id="myTopnav">
          <li><a class="active" href="index.php">Home</a></li>
          <li><a href="portafolio.php">Portafolio de Proyectos</a></li>
          <li><a href="infopersonal.php">Información Personal</a></li>
          <li><a href="contacto.php">Contacto</a></li>
          <li class="icon">
            <a href="javascript:void(0);" style="font-size:15px;" onclick="responsiveToggle()">☰</a>
          </li>
        </ul>
 
        <div id="parent">
          <div id="wide">
            <div class='define'>
                <div class="personal" align="center">
                  <h1>Víctor Saborío Hernández</h1>
                </div>
            </div>
            <div id="slideshow">
               <div>
                 <img src="http://farm6.static.flickr.com/5224/5658667829_2bb7d42a9c_m.jpg">
               </div>
               <div>
                 <img src="http://farm6.static.flickr.com/5230/5638093881_a791e4f819_m.jpg">
               </div>
            </div>
          </div>
          <div id="narrow">
            <p class="thought" id="fuente-reflexion">
              "Por muy larga que sea la tormenta, el sol siempre vuelve a brillar
              entre las nubes".
            </p>
          </div>
        </div>       
    </div>
 
    <footer>
      <div class="footer">
        <div class="serif">
          <h5>Sígueme en</h5>
        </div>
        <div class="text-center">
          <a onclick="" class="btn btn-social-icon btn-lg btn-facebook"><i class="fa fa-facebook"></i></a>
          <a onclick="" class="btn btn-social-icon btn-lg btn-twitter"><i class="fa fa-twitter"></i></a>
          <a onclick="" class="btn btn-social-icon btn-lg btn-google"><i class="fa fa-google"></i></a>
          <a onclick="" class="btn btn-social-icon btn-lg btn-github"><i class="fa fa-github"></i></a>
        </div>
        <div>
          <h6>Instituto Tecnológico de Costa Rica - 2016</h6>
        </div>
      </div>
    </footer>

</body>
</html>