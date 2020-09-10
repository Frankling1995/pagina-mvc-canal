<?php 

    function autoload ($classname) {

       return require_once 'controllers/'.$classname.'.php';
    
    }

    spl_autoload_register('autoload');