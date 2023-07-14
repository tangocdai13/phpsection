<?php

class User extends Model
{
    public function getGender($value)
    {
        return $value == 1 ? 'Nam' : 'Nữ';
    }
}