<?php
$titulo = filter_var($_POST['titulo'], FILTER_SANITIZE_STRING);
$link = filter_var($_POST['link'], FILTER_SANITIZE_STRING);
$cliente = filter_var($_POST['cliente'], FILTER_SANITIZE_STRING);
$imagen = $_FILES['imagen'];
date_default_timezone_set('America/Chihuahua');
$fecha = date("d-m-Y H:i:s"); 
$hoy = fechaMx($fecha) . ' ' . date("g:i a");

function fechaMx($fecha) {
    $fecha = substr($fecha, 0, 10);
    $numeroDia = date('d', strtotime($fecha));
    $dia = date('l', strtotime($fecha));
    $mes = date('F', strtotime($fecha));
    $anio = date('Y', strtotime($fecha));
    $dias_ES = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
    $dias_EN = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
    $nombredia = str_replace($dias_EN, $dias_ES, $dia);
    $meses_ES = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
    $meses_EN = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
    $nombreMes = str_replace($meses_EN, $meses_ES, $mes);
    return $nombredia." ".$numeroDia." de ".$nombreMes." de ".$anio;
}




$directorio = "../img/publicidad/";

    if(!is_dir($directorio)){
        mkdir($directorio, 0755, true);
    }
    $uniqueId= time().'-'.mt_rand();

    $temp = explode(".", $_FILES["imagen"]["name"]);
    $newfilename = round(microtime(true)) . '.' . end($temp);

    if(move_uploaded_file($_FILES['imagen']['tmp_name'], $directorio . $newfilename )) {
        $imagen_url = $newfilename;
        $imagen_resultado = "Se subio correctamente";
            // $respuesta = array(
            //     'resultado' => 'Correcto',
            //     'url' => $imagen_url
            // );
    } else {
        $respuesta = array(
            'error' => error_get_last()
        );
    }

    include 'conn.php';

    try {
        $stmt = $conn->prepare("INSERT INTO publicidad (titulo, imagen, link, cliente, fecha) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param('sssss', $titulo, $imagen_url, $link, $cliente, $hoy);
        $stmt->execute();
        if($stmt->affected_rows > 0){
            $response = array(
                'response' => 'correct',
                'url' => $imagen_url,
            );
        } else {
            $response = array(
                'response' => 'error'
            );
        }
        $stmt->close();
        $conn->close();
    } 

catch (Exception $e) {
    $response = array(
        'error' => $e->getMessage()
    );
}


echo json_encode($response);