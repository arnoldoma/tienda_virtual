<?php


/*====================== OBTENEMOS LOS METODOS DEL MODELO ======================*/

// Pagina principal del proyecto
class Home extends Controllers
{
  public function __construct()
  {
    // Para que el metodo constructor se ejecute debemos invocarlo aqui.
    parent::__construct();
  }

  // Metodo del Vista

  public function home()
  {
    $data['page_id'] = 1;
    $data['page_tag'] = "Home";
    $data['page_title'] = "Principal";
    $data['page_name'] = "home";
    $data['page_content'] = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis quod hic excepturi quam, animi ratione.";

    $this->views->getView($this, "home", $data);
  }
}
