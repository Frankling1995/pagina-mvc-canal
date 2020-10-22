<?php
App::isAdmin();


if (isset($_SESSION['rol'])) {
    if($_SESSION['rol']==='administrador'){
        echo "iniciado administrador";
    }else{
        echo "inciano editor";
    }
   echo' <a href="<?php echo LOGOUT;?>"> cerrar</a>';
} else {
   
}

?>

