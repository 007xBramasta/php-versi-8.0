<?php

class Login
{

}

$login = new Login();

var_dump($login::class); //PHP8
var_dump(get_class($login));
var_dump(Login::class);