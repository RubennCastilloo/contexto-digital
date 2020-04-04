<?php

$email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

include 'conn.php';

try {
    $sql = $conn->prepare("SELECT nombre, correo, password, imagen, tipo FROM usuarios WHERE correo = ?");
    $sql->bind_param('s', $email);
    $sql->execute();
    $sql->bind_result($nombre_usr, $correo_usr, $password_usr, $imagen_usr, $tipo_usr);
    $sql->fetch();
    if ($correo_usr) {
        if (password_verify($password, $password_usr)) {
            session_start();
            $_SESSION['nombre'] = $nombre_usr;
            $_SESSION['login'] = true;
            $_SESSION['correo'] = $correo_usr;
            $_SESSION['imagen'] = $imagen_usr;
            $_SESSION['tipo'] = $tipo_usr;

            $response = array(
                'response' => 'correcto',
                'tipo' => $tipo_usr,
                'nombre' => $nombre_usr
            );
        } else {
            $response = array(
                'response' => 'incorrecto'
            );
        }
    } else {
        $response = array(
            'response' => 'noexiste'
        );
    }
    $sql->close();
    $conn->close();
} catch (Exception $e) {
    $response = array(
        'error' => $e->getMessage()
    );
}
echo json_encode($response);
