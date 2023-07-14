<?php

function view(string $viewPath, array $data = [])
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    
    foreach ($data as $key => $value) {
        $$key = $value;
    }

    $viewFile = './Views/' . str_replace('.', '/', $viewPath) . '.php';

    require_once($viewFile);
}