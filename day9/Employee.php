<?php

class Employee extends AbstractDemo
{
    public function __construct()
    {
        echo __METHOD__;
    }

    public function unlock()
    {
        return __METHOD__;
    }

    public function __destruct()
    {
        echo '<br/>' . __METHOD__;
    }
}
