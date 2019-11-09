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
  
  *Модель (Model)*
  
Модель забезпечує доступ для перегляду даних, збору та запису даних і є мостом між компонентом View і компонентом Controller у загальній схемі.
Тобто модель не має ніякого зв’язку або знань про те, що відбувається з даними, коли вони передаються компонентам View або Controller

*Вид (View)*

Вид - це місце, де переглядаються дані, запитувані від Моделі, і визначається її кінцевий вихід. Також це частина системи, де, як правило, генерується та відображається HTML. 

*Контролер (Controller)*

Його завдання полягає в обробці даних, які користувач вводить або надсилає, та оновлює Модель відповідно. Це єдина частина шаблону, з яким повинен взаємодіяти користувач.
Контролер може бути узагальнений просто як збирач інформації, який потім передає його Моделі, яку слід організувати для зберігання, і не містить жодної логіки, окрім необхідної для збору вхідних даних.

Для того, щоб продемонструвати розуміння патерну я поставила собі таке завдання: розробити форму з кнопкою, при натисканні на яку користувач зможе прочитати деяку інформацію про моу PHP.

Код файлу form.html:


```html
<!DOCTYPE HTML>
<html>  
<head>
  <link href="style.css" rel="stylesheet">
</head>

<body>
    <form action="index.php" method="post" >      
        <p> Click on the button to read information about the PHP programming language!</p>
        <input class="button" type="submit" name="definition" value="Definition">           
        <input class="button" type="submit" name="application_areas" value="Application areas">    
    </form>
</body>
</html>
```

Код файлу style.css:

```css
@CHARSET "UTF-8";

form{
    border:1px black solid;
    background-color:#98FB98;
    width:50%;
    margin:auto;
}

.button {
    background-color: #4CAF50; /* Green */
   width: 70%;
   height: 5%;
    border: none;
    color: white;
    padding: 15px 20px 15px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 10px 80px 15px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}

.button:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
    background-color:#419444;
}

p{
    text-align:center;
}
```

   Нижче приведений код програми на мові php (index.php):  
   

```php
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
```

Вигляд форми:

![Вигляд форми](/LAB_2/Form.PNG)

Вигляд результату (при натисканні кнопки):

![Вигляд форми](/LAB_2/Result.PNG)



___

***Завдання 2***

***Проект на GitHub***

Наступник кроком стало оформлення звіту та файлу коду на GitHub.

 
Вигляд проекту на Github:

  ![Вигляд проекту на Github](/LAB_2/Git.PNG)
 
___

***Висновки:***

	Під час виконання лабораторної роботи були вивчені принципи роботи з патерном MVC.
	На прикладі власноруч створеного проекту я попрактикувала отримані теоретичні знання. 
	Окрему увагу, я приділила також особливостям роботи з середою розробки на мові PHP та системі контролю версій GitHub.
	Таким чином, мета лабораторної роботи була досягнута.
