<?php
class Person
{
    const PHONE = 9324334234;
    public $name = 'Nguyễn Văn A';
    protected $email = 'nguyenvan@gmail.com';
    private $phone = '094324244';
    protected static $address = 'Hà Nội'; // Cached

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPhone()
    {
        // return static::PHONE;
        return self::PHONE;
    }

    public function getAddress()
    {
        // return sefl::$address;
        return static::$address;
    }

}

$person1 = new Person;
$person2 = new Person;

echo '<pre>';
// print_r($person1);
// print_r($person1->name);
// echo '<br/>';
// print_r($person1->name);
// print_r($person1->email);
// print_r($person1->phone);
// print_r($person1->getAddress());

// echo Person::PHONE;
// echo '<br/>';
// echo $person1->getPhone();
echo Person::$address;
echo '</pre>';

function getName() {

}