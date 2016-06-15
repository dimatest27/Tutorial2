<?php
require 'vendor/autoload.php';
require_once 'vendor/fzaninotto/faker/src/autoload.php';

$faker = Faker\Factory::create();

class TestClass
{
    public $text = 'Hello, World!';
    
    public function echos()
    {
        echo $this->text;
    }
}

    echo $faker->name . '<br>';
    echo $faker->address;
?>