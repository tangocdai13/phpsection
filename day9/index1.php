<?php

namespace Demo1;

class Student {
    public function __construct()
    {
        echo __METHOD__;
    }
}

namespace Demo2;

class Student {
    public function __construct()
    {
        echo '<br/>' . __METHOD__;
    }
}

$objectStudent1 = new \Demo1\Student;
$objectStudent2 = new \Demo2\Student;

echo '<pre>';
print_r($objectStudent1);
print_r($objectStudent2);