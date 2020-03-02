<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/2 0002
 * Time: 下午 4:23
 */
class A{
    public static function loadClass($class){
        $class_map=[
            'os\\Linux'=>'Linux.php',
            'HelloWorld'=>'HelloWorld.php'
        ];
        if(file_exists($class_map[$class])){
            include $class_map[$class];
            echo PHP_EOL;
        }
    }

}

spl_autoload_register(array('A','loadClass'));
$a=new os\Linux();