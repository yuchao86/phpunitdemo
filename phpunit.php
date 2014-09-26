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
require_once "PHPUnit2/Framework/TestCase.php";


class StackTest extends PHPUnit2_Framework_TestCase
{
    public function testEmpty()
    {
        $stack = array();
        $this->assertNull($stack);
        return $stack;
    }

    /**
     * @depends testEmpty
     */
    public function testPush(array $stack )
    {
        array_push($stack,'foo');
        $this->assertEquals('foo',$stack[count($stack)-1]);
        $this->assertNoNull($stack);

        return $stack;

    }
    /**
     * @depends testPush
     */
    public function testPop()
    {
        $this->assertEquals('foo',array_pop($stack));
        $this->assertNull($stack);
    
    }

    

}
