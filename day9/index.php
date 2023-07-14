<?php

require './Person.php';
require './User.php';
require './AbstractDemo.php';
require './SendMessage.php';
require './Employee.php';

$employee = new Employee;

echo '<br/>';
echo $employee->unlock();