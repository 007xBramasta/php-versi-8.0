<?php

class Example {
    public string|int|bool|array $data; //UNION TYPE PROPERTY
}

$example = new Example();
$example->data = "Bramasta";
$example->data = 100;
$example->data = true;
$example->data = [];

function sampleFunction(string|array $data):void //UNION TYPE ARGUMENT
{
    if (is_array($data)) { 
        echo "Array" . PHP_EOL; 
    } else if (is_string($data)) {
        echo "string" . PHP_EOL; 
    }
}

sampleFunction("Brmasta");
sampleFunction(["heheheh"]);

function Contoh(string|array $data): string|array //RETURN VALUE
{
    if (is_array($data)) {
       return ["HEHE"];
    } else if (is_string($data)) {
        return "string"; 
    }
}

var_dump(Contoh("Bram"));
var_dump(Contoh([]));


