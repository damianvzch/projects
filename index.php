<?php
$listar = array();
$directorio = opendir("../");
while ($elemento = readdir($directorio)) {
  if($elemento != '.' && $elemento != '..' && $elemento != 'projects' && $elemento != 'xampp' && $elemento != 'webalizer' && $elemento != 'img'){
    if(is_dir("../".$elemento)){
      array_push($listar,$elemento);
      sort($listar);
    }
  }


}

?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Proyectos</title>
    <link href="img/server.png" rel="icon">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>
    <div class="content" align="center">
      <div class="menu">
      <img src="img/server.png" width="150" alt="Proyectos">
      <h4 align="center"><b>PROYECTOS</b></h4>
      <hr>
      <h4 align="left"><b>Herramientas</b></h4>
      <ol align="left">
      <img src='img/database.gif' width='50'><a class='lista' href="../phpmyadmin" target='_blank'> phpMyAdmin</a>
      <br>
      <img src='img/php.gif' width='50'>
      <a class='lista' href="../dashboard/phpinfo.php" target='_blank'> phpinfo</a>
      
      </ol>
        <h4 align="left"><b>Tus proyectos</b></h4>
     
        <ol align="left">
          <?php 
          
          foreach ($listar as $key => $value) {
            echo "<img src='img/file.gif' width='50'><a class='lista' href='../$value' target='_blank'> $value</a></br>";
          }
    
          
          ?>
        </ol>

      </div>

    </div>
 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
