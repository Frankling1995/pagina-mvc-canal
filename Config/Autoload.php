<?php 

//AUTOCARGA LOS CLASES BASES PARA EL FUCIONAMIENTO DE LA PAGINA

   //spl_autoload_register — Registrar las funciones dadas como implementación de __autoload()
   //Registra una función con la cola de __autoload proporcionada por spl. 
   //Si la cola aún no ha sido activa, será activada.

   function autoload ($classname) {

      return require_once 'Controllers/'.$classname.'.php';
   
   }

   spl_autoload_register('autoload');