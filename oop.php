<?php

class TestClass
{

    public $public = 'Public';

    protected $protected = 'Protected';

    private $private = 'Private';

    public function printValue()
    {

        echo $this->public."<br>";

        echo $this->protected."<br>";;

        echo $this->private."<br>";;

    }
    public static function showvars(){
        echo "\n this is from static function";
    }

}

$obj = new TestClass();


$obj->printValue(); // Shows Public, Protected and Private

//Here need to call the showvars function from the TestClass