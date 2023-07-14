<?php

class Product
{
    protected $name;
    protected $price;
    protected $category;

    public function setName($value)
    {
        $this->name = $value;
    }

    public function setPrice($value)
    {
        $this->price = $value;
    }

    public function setCategory($value)
    {
        $this->category = $value;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getCategory()
    {
        return $this->category;
    }
}

$product1 = new Product;
$product1->setName('Laptop Dell 43');
$product1->setPrice(50000000);
$product1->setCategory('Dell');

echo '<h3>Product1 Infomation</h3>';
echo $product1->getName();
echo '<br/>';
echo $product1->getPrice();
echo '<br/>';
echo $product1->getCategory();


$product2 = new Product;
$product2->setName('Iphone 15');
$product2->setPrice(500000000);
$product2->setCategory('Apple');


echo '<h3>Product2 Infomation</h3>';
echo $product2->getName();
echo '<br/>';
echo $product2->getPrice();
echo '<br/>';
echo $product2->getCategory();