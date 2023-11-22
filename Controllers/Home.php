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
  public function home($params)
  {
    $data['page_id'] = 1;
    $data['page_tag'] = "Home";
    $data['page_title'] = "Principal";
    $data['page_name'] = "home";
    $data['page_content'] = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis quod hic excepturi quam, animi ratione.";

    $this->views->getView($this, "home", $data);
  }

  // Metodo Insertar
  public function insertar()
  {
    // Comunicando al modelo y pasamos los parametros
    $data = $this->model->setUser("Ricardo Gonzalez", 455566999, "rgonzalez@gmail.com");
    print_r($data);
  }

  // Extraer usuario y le pasamo la variable id
  public function verusuario($id)
  {
    $data = $this->model->getUser($id);
    print_r($data);
  }

  // Actualizar Registro
  public function actualizar()
  {
    $data = $this->model->updateUser(5, "Jorge", 444569999, "jorge@info.com");
    print_r($data);
  }

  // Ver usuarios
  public function verusuarios()
  {
    $data = $this->model->getUsers();
    print_r('<pre>');
    print_r($data);
    print_r('</pre>');
  }

  // ELIMINAR USUARIO y PARAMETRO
  public function eliminar($id)
  {
    $data = $this->model->delUser($id);
    print_r($data);
  }
}
