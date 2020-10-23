<?php
//---------ARCHIVOS DE CONFIGURACION INICIA---------//
require_once 'Config/Autoload.php';
require_once 'Config/App.php';
require_once 'Config/Server.php';
//-----------------------------------------------//


// INSTACIA DE LA DE WEB//
//           |          //
//           |          //
//           V          //
session_start();
$App = App::Router();


