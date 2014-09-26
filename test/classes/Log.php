<?php
/**
 *
 * @author Yu Chao <yuchao86@gmail.com>
 * @package default
 * @version v1.0
 * @license  GPL
 * @see
 * 	-web Links
 * 	https://phpunit.de/
 */
class Log {

    var $path;

    function __construct($path) {

        $this->path = $path;
    }

    function message($message) {

        $file = fopen($this->path, 'a');
        fwrite($file, $message . "\n");
        fclose($file);
    }
}
?>
