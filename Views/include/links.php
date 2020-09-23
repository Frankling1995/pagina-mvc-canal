<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>Views/assets/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="<?php echo BASE_URL;?>Views/assets/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="<?php echo BASE_URL;?>Views/assets/css/estilos.css">
    <title>Canal <?php if(isset($_GET['c'])){echo  "-".$_GET['c'];}?> </title>
</head>
<body>