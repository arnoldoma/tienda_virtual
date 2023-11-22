<?php
class Controllers
{
  public function __construct()
  {
    // Para que se carga el modelo lo invocacions en el constructor
    $this->views = new Views();
    $this->loadModel();
  }

  public function loadModel()
  {
    // Cargamos la clase modelo "HomeModel.php"
    $model = get_class($this) . "Model";
    $routClass = "Models/" . $model . ".php";

    // Validamos si existe el archivo modelo
    if (file_exists($routClass)) {

      // Si existe el archivo requerimos el modelo
      require_once($routClass);
      // Creamos la instancia del modelo
      $this->model = new $model();
    }
  }
}
