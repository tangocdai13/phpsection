<?php


class Person
{
    protected $name = 'Nguyễn Văn A';

    public function getInfo()
    {
        echo 'Person Class with getInfo()';
    }
}

class Student extends Person
{
    public function getName()
    {
        return $this->name;
    }

    public function getInfo()
    {
        parent::getInfo();
        return '<br/>Student Class with getInfo()';
    }
}

$student = new Student;

echo $student->getInfo();
