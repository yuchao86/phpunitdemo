<?php

require_once('simpletest/autorun.php');
require_once('../classes/Log.php');

class TestOfLogging extends UnitTestCase {

    function testFirstLogMessagesCreatesFileIfNonexistent() {

        @unlink(dirname(__FILE__) . '/../log/test.log');
        $log = new Log(dirname(__FILE__) . '/../log/test.log');
        $log->message('Should write this to a file');
        $this->assertTrue(file_exists(dirname(__FILE__) . '/../log/test.log'));

    }
}
?>
