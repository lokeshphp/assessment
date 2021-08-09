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
    public static function showMessage(){
        echo "\n this is from static function";
    }

}

$obj = new TestClass();
$obj->printValue(); 

//Here need to call the showMessage function from the TestClass