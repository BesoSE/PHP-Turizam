<?php 

session_start();

require_once 'system-helper.inc.php';
spl_autoload_register('myAutoLoader');

function myAutoLoader($className){
 
    $url=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    if(strpos($url,'includes')!== false){
        $path='../classes/';
    }else{
        $path='classes/';
    }

    $extension='.class.php';

    include_once $path. $className  .$extension;


}



// session_start();

// require_once 'system-helper.inc.php';
// spl_autoload_register('myAutoLoader');

// function myAutoLoader($className){
 
//     $url=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
//     if(strpos($url,'includes')!== false){
//         $path='/home/vol7_1/byethost24.com/b24_25674639/../classes/';
//     }else{
//         $path='/home/vol7_1/byethost24.com/b24_25674639/classes/';
//     }

//     $extension='.class.php';

//     include_once $path. $className  .$extension;


// }





?>