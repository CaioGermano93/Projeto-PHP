<?php
    $usuario = $_REQUEST['usuario'];
    $senha = $_REQUEST['senha'];
    
    if($usuario == "admin" && $senha = "admin")
        header("Location: .\CRUD_read\areaAdmin.php");
    else
        header("Location: TelaLoginInvalid.php");  
?>