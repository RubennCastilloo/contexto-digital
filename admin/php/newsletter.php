<?php

$newsletter = filter_var($_POST['newsletter'],FILTER_SANITIZE_STRING);

include 'conn.php';

try {
    $stmt = $conn->prepare("INSERT INTO newsletter (correo) VALUES (?)");
    $stmt->bind_param('s', $newsletter);
    $stmt->execute();
    if($stmt->affected_rows > 0){
        $response = array(
            'response' => 'correct',
            'correo' => $newsletter
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