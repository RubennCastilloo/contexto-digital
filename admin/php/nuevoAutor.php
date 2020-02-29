<?php
$autor = filter_var($_POST['autor'], FILTER_SANITIZE_STRING);


    include 'conn.php';

    try {
        $stmt = $conn->prepare("INSERT INTO autor (autor) VALUES (?)");
        $stmt->bind_param('s', $autor);
        $stmt->execute();
        if($stmt->affected_rows > 0){
            $response = array(
                'response' => 'correct',
                'autor' => $autor
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