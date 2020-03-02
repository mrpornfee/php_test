<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/2 0002
 * Time: 下午 4:09
 */
spl_autoload_register(function ($class){
    $class_map=array(
        'os\\Linux'=>'./Linux.php',
        'HelloWorld'=>'./HelloWorld.php'
    );
    $file=$class_map[$class];
    if(file_exists($file)){
        include $file;
        echo PHP_EOL;
    }
});

new \os\Linux();
new HelloWorld();