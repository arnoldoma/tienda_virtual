<?php

/*====================== RUTAS AMIGABLES ======================*/

// Requerimos el archivo configuracion
require_once("Config/Config.php");
// Se coloca despues de config, porque vamos a necesitar datos de config para helpers.
require_once("Helpers/Helpers.php");

// Variable para controlar las cotroladores, metodos y parametros del url.
$url = !empty($_GET['url']) ? $_GET['url'] : 'home/home';

// que separe cuando encuentre "/" y lo muestre en un array 
$arrUrl = explode("/", $url);

// Definimos las variables
$controller = $arrUrl[0];
$method = $arrUrl[0];
$params = "";

// Validamos el array del metodo
if (!empty($arrUrl[1])) {
  if ($arrUrl[1] != "") {
    $method = $arrUrl[1];
  }
}
// Validamos el array parametros
if (!empty($arrUrl[2])) {
  if ($arrUrl[2] != "") {
    for ($i = 2; $i < count($arrUrl); $i++) {
      $params .= $arrUrl[$i] . ',';
    }
    // Removemos el ultimo caracter de la cadena ","
    $params = trim($params, ",");

    // echo $params;
  }
}

// ARCHIVO AUTOLOAD
require_once("Libraries/Core/Autoload.php");

// Load
require_once("Libraries/Core/Load.php");


// VISUALIZACION

// echo "<br>";
// echo "Controlador: " . $controller;
// echo "<br>";
// echo "Metodo: " . $method;
// echo "<br>";
// echo "Params: " . $params;


// echo $url;
// print_r("<pre>");
// print_r($arrUrl);
// print_r("</pre>");
