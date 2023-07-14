<?php

class Product extends Model
{
    const TABLE = 'products';

    public function __construct()
    {
        parent::__construct();
        $this->setTable(static::TABLE);
    }
}