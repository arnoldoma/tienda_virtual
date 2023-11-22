<?php


/*====================== PAGINA DE ERROR ======================*/

// Pagina principal del proyecto
class Errors extends Controllers
{
  public function __construct()
  {
    parent::__construct();
  }

  public function notFound()
  {
    $this->views->getView($this, "error");
  }
}

$notFound = new Errors();

$notFound->notFound();
