<?php


//最后编写测试类，不编写这个类也可以，在命令行下直接跑phpunitcalculatorTest就行。

require_once("PHPUnit2/Framework/TestSuite.php");
require_once("CalculatorTest.php"); 
require_once("TestAdd.php"); 


//载入测试用例 
$s = new PHPUnit2_Framework_TestSuite("CalculatorTest"); 
$s ->addTestSuite("TestAdd"); 
//测试 
$r = $s->run(); 
//测试结果 
echo "====";
echo $s->toString(); 

//跑一边这个测试类就可以了，它输出了测试用例中所有的测试结果。如果你有多个类，多个测试类的test类，那么可以编写一个AllTests套件。包含所有的待测试的测试类，然后在phpunit下统一执行就行。这个类可能是这样的：

/*
require_once 'PHPUnit/Framework.php'; 
require_once 'PHPUnit/TextUI/TestRunner.php';//这里引入了这个文件 

require_once 'DemoTest.php';  //引入了两个测试类
require_once 'calculatortest.php'; 

class AllTests {
    public static function main() {
        PHPUnit_TextUI_TestRunner::run(self::suite()); 
    } 

    public static function suite() { 
        $suite = new PHPUnit_Framework_TestSuite('Zend Framework - Zend'); 
        $suite->addTestSuite('DemoTest'); //最佳测试类
        $suite->addTestSuite('calculatortest'); 
        return $suite; 
    } 
} 

 */
?>
