<?php

use Classes\Addition;
use Controller\Calculator;
include('Classes/Addition.php');
include('Controller/Calculator.php');

//$calculator=new Calculator();
//echo $calculator->add(20,50);

echo Calculator::add(20,50);
echo '<br>';
echo Addition::add(50,20);


?>