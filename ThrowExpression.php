<?php

function sayHello(?string $name)
{

    if ($name== null){
        throw new Exception("Tidak boleh null"); //DULU THROW ADALAH STATMENT
    }
    
    echo "Hello $name" . PHP_EOL;
}

function sayHelloExpression(?string $name)
{
    $result = $name !=null ? "Hello $name" : throw new Exception("Tidak boleh null masseh"); //THROW SEKARANG ADALAH EXPRESSION
    echo $result . PHP_EOL;
}

sayHelloExpression("Bramasta");
sayHelloExpression(null);
