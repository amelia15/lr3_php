<?php

class Model2
{
    public $string1;
 
    public function __construct(){
              $this->string1 = "<strong>Главная область применения PHP</strong> - написание скриптов, работающих на стороне сервера; таким образом, PHP способен выполнять все то, что выполняет любая другая программа CGI, например, обрабатывать данные форм, генерировать динамические страницы или отсылать и принимать cookies.";
    }
}

class Model
{
    public $string1;

    public function __construct(){
        $this->string1 = "<strong>PHP </strong>—  это широко используемый язык сценариев общего назначения с открытым исходным кодом, разработанный в качестве инструмента для создания динамических веб-страниц и работы с базами данных.";
        
}

class View
{
    private $model;
    private $controller;

    public function __construct($controller,$model) {
        $this->controller = $controller;
        $this->model = $model;
    }
	
    public function output1(){
        return "<p>" . $this->model->string1 . "</p>";
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

$model2 = new Model2();
$controller2 = new Controller($model2);
$view2 = new View($controller2, $model2);
if (isset($_POST["definition"]))
{
    if (isset($_GET['action']) && !empty($_GET['action'])) {
        $controller->{$_GET['action']}();
    }
    
    echo $view->output1();
}

if (isset($_POST["application_areas"]))
{
    if (isset($_GET['action']) && !empty($_GET['action'])) {
        $controller2->{$_GET['action']}();
    }
    
    echo $view2->output1();
}
?>
