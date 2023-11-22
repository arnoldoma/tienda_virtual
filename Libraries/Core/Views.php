<?php
/*====================== CONECTA LA VISTA Y CONTROLLER ======================*/

class Views
{

  // No tendra Metodo Constructor

  function getView($controller, $view, $data = "")
  {
    $controller = get_class($controller);
    // Realizamos una validacion cuando es HOME/HOME
    if ($controller == "Home") {
      $view = "Views/" . $view . ".php";
    } else {
      // CUANDO NO ES HOME PASAMOS EL COTROLADOR
      $view = "Views/" . $controller . "/" . $view . ".php";
    }
    require_once($view);
  }
}
