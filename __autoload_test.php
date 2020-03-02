<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/2 0002
 * Time: 下午 3:18
 */
function __autoload($class){
    $file=$class.'.php';
    if(file_exists($file)){
        include $file;
    }
}

new HelloWorld();