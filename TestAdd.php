<?php

require_once "Add.php";
require_once "PHPUnit2/Framework/TestCase.php";

class TestAdd extends PHPUnit2_Framework_TestCase
{
    function test1(){
        $this->assertTrue(calculator::add(1,2)==3);

    }
    function test2(){
        $this->assertTrue(calculator::add(1,3)==4);

    }

}
