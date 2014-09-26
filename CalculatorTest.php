<?php
/**
 *
 * @author Yu Chao <yuchao86@gmail.com>
 * @package default
 * @version v1.0
 * @license  GPL
 * @see
 *  -web Links
 *  https://phpunit.de/
 */
//编写测试用例类，这个类引入了PHPUnit.php和待测试的计算器类，然后初始化待测试类，编写断言。

require_once("Add.php"); 
require_once("PHPUnit2/Framework/TestCase.php"); 

class calculatorTest extends PHPUnit2_Framework_TestCase 
{ 
    public $o; 
    //开始的时候初始化一个待测试类 
    function setUp() 
    { 
        $this->o = new calculator(); 
    } 
    //最后消亡的时候清除掉这个类 
    function tearDown() { 
        unset($this->o); 
    } 
    function testadd() 
    { 
        $r = $this->o->add(1,2); 
        $e = 5; 
        //assertEquals和assertTrue基本一样，不过这个返回的参数更加详细 
        //这里的1+2肯定等于3，我们故意写错看下他的反应。注意这里是故意写错，实际测试时，这些结果必须是完全正确的，因为它的功能就是检测类方法是否正确。 
        $this->assertEquals($r,$e); 
    } 
    function testadd2() 
    { 
        $r = $this->o->add(102,106); 
        $e = 208; 
        $this->assertTrue($r == $e); 
    } 

}
