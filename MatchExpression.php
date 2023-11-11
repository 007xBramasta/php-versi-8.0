<?php

$value = "E";
$result = "";

switch ($value){ //SWITCH
    case "A";
    case "B";
    case "C";
        $result = "Anda Lulus";
        break;
    case "D" :
        $result = "Anda tidak lulus";
        break;
    case "E":
        $result = "Mungkin Anda salah jurusan";
        break;
    default:
        $result = "Nilai apa itu?";            
}

echo $result . PHP_EOL;

$result = match ($value){ //MATCH EXPRESSION
    "A", "B", "C" => "Anda Lulus",
    "D" => "Anda Tidak Lulus",
    "E" => "Mungkin Anda salah jurusan",
    default => "Nilai apa itu?"
};

echo $result . PHP_EOL;

$value = 80;

$result = match (true){ //MATCH EXPRESSION NON EQUALS
    $value >= 80 => "A",
    $value >= 70 => "B",
    $value >= 60 => "C",
    $value >= 50 => "D",
    default => "E"

};

echo $result . PHP_EOL;

$name = "Mr.Bram";

$result = match (true) {
    str_contains($name, "Mr.") => "Hello Sir",
    str_contains($name, "Mrs.") => "Hello Mam",
    default => "Hello"
};

echo $result . PHP_EOL;