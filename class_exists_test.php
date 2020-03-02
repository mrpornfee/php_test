<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/2 0002
 * Time: 下午 3:54
 */
function __autoload($class){
    echo 'eeeeee'.PHP_EOL;
    throw new Exception('Class "' . $class . '" could not be autoloaded');
}
class A{
    public function __construct(){
        echo 'A is ready';
    }
}
var_dump(class_exists('B'));
