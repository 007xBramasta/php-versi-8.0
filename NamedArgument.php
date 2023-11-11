<?php

function Hello(string $first, string $middle = " ", string $last): void
{
    echo "Hello $first $middle $last" . PHP_EOL;
}

Hello("Bramasata", "Albatio", "Haryono");
//sayHello("Bramsta", "Haryono"); EROOR


Hello(last: "Haryono", middle: "Albatio", first:"Bramasta");
Hello(first: "Bramasta", middle:"", last: "Haryono");  