<?php

session_start();

require_once '../Modelo/conexion.php';

$con = new Conexion();
$action = isset($_GET['accion']) ? $_GET['accion'] : '';

if ($action == 'login') {
    $email = $_POST['email'];
    $contrasena = $_POST['constrasena'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL) || !preg_match('/^[a-zA-Z0-9._%+-]+@(gmail\.com|hotmail\.com)$/', $email)) {
        $_SESSION['mensaje'] = "Por favor, ingrese un correo válido.";
        $_SESSION['tipo_mensaje'] = "error";
        header("Location: ../login.php");
        exit();
    }
    // Inicio de sesión

    $login_exitoso = $con->loginUser($email,$contrasena);

    if ($login_exitoso) {
        $_SESSION['loggedin']=true;
        $_SESSION['mensaje']="INICIO DE SESIÓN EXITOSO";
        $_SESSION['tipo_mensaje']="exito";

        $tipo_usuario = $con->getUserRole($email);
        if ($tipo_usuario == 'cliente') {
            header("Location ../Vista/index.php");
        } elseif ($tipo_usuario == 'vendedor') {
            header("Location: ../Vista/vendedor/vendedor-view.php");
        } else {
            header("Location: ../Vista/admin/admin-view.php");
        }

    }


}

?>