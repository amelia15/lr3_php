<?php

class Model
{
    public $string;
    

    public function __construct(){
        $this->string = "<strong>PHP </strong>— рефлексивный язык программирования, разработанный в качестве инструмента для создания динамических веб-страниц и работы с базами данных.";
    }
}

class View
{
    private $model;
    private $controller;

    public function __construct($controller,$model) {
        $this->controller = $controller;
        $this->model = $model;
    }
	
    public function output(){
        return "<p>" . $this->model->string . "</p>";
    }
}

class Controller
{
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }
}


$model = new Model();
$controller = new Controller($model);
$view = new View($controller, $model);

if (isset($_GET['action']) && !empty($_GET['action'])) {
    $controller->{$_GET['action']}();
}

echo $view->output();
?>
