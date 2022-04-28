<?php

class Animal{

    public function __construct(){
        //echo "Método construtor";
        //spl_autoload_extensions('.php');
        //spl_autoload_register(array($this, 'load'));
        echo 'É um animal';
    }

    /*
    public function load($class){
        $extension = spl_autoload_extensions();
        require_once('inc/controller/'.$class.$extension);
    }

*/

//$autoload = new Autoload();
}
?>