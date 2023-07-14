<?php

class Product
{
    protected $name;

    public function setName($value)
    {
        $this->name = $value;
    }

    public function getName()
    {
        return $this->name;
    }
}

$product1 = new Product;
$product1->setName('Iphone 15');
echo $product1->getName();

$product2 = clone $product1;
$product2->setName('Iphone 14');
echo '<br/>';
echo $product2->getName();
echo '<br/>';
echo $product1->getName();