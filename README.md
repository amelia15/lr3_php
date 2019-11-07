# Лабораторна работа №3 по "Веб-програмуванню"
### Створення веб-сайту (авторизація користувачів, програмування системи меню, робота з даними у форматі XML та JSON, робота з датою та часом)

***
#### Виконала: Вознюк Дарина
##### Група: 6.04.122.012.16.1

***

<p align="center"><bold>
	Хід роботи:
	</bold></p>
	

***Завдання <br/>
  Продемонструвати розуміння патерну проектування MVC.<br/>***
    
  Так як, до цього я була не знайома з патерном MVC, спочатку я ознайомилася з теоретичною частиною. Найважливішою частиною є розуміння принципової відмінності між кожним з 3 основних класів: Model, View, Controller.
  
  

   Нижче приведений код програми на мові php:  
   

```php
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
```

Вигляд форми:

![Вигляд форми](/LAB_2/Form.PNG)



___

***Завдання 2***

***Проект на GitHub***

Наступник кроком стало оформлення звіту та файлу коду на GitHub.

 
Вигляд проекту на Github:

  ![Вигляд проекту на Github](/LAB_2/Git.PNG)
 
___

***Висновки:***

	Під час виконання лабораторної роботи були вивчен принцип роботи з патерном MVC.
	На прикладі власноруч створеного проекту я попрактикувала отримані теоретичні знання. 
	Окрему увагу, я приділила також особливостям роботи з середою розробки на мові PHP та системі контролю версій GitHub.
	Таким чином, мета лабораторної роботи була досягнута.
