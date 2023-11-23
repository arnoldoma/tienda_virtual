<?php

// Convertimos la primera letra del controlador en MAYUSCULA
// Porque genera error en algunos servidores por la primera Letra en esta en MINUSCULA
$controller = ucwords($controller);

// Autocarga del los controllers
$controllerFile = "Controllers/" . $controller . ".php";


// Validacion si existe controlador
if (file_exists($controllerFile)) {

  // Requerimos la ruta el archivo
  require_once($controllerFile);

  // Creamos la instancia
  $controller = new $controller();

  // Validacion de archivo controlador
  if (method_exists($controller, $method)) {
    $controller->{$method}($params);
  } else {
    require_once("Controllers/Error.php");
  }

  // Si no existe controlador
} else {
  require_once("Controllers/Error.php");
}
