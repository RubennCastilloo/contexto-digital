<?php

function obtenerNotas() {
    include 'conn.php';
    try {
        return $conn->query("SELECT id, titulo, imagen, contenido, autor, categoria, fecha FROM notas");
    } catch (Exception $e) {
         echo "Error!" . $e->getMessage() . "<br>";
         return false;
    }
}

function obtenerNotaId($id) {
    include 'conn.php';
    try {
        return $conn->query("SELECT titulo, imagen, contenido, autor, categoria, fecha FROM notas WHERE id = $id");
    } catch (Exception $e) {
         echo "Error!" . $e->getMessage() . "<br>";
         return false;
    }
}

function obtenerAutores() {
    include 'conn.php';
    try {
        return $conn->query("SELECT id, autor FROM autor");
    } catch (Exception $e) {
         echo "Error!" . $e->getMessage() . "<br>";
         return false;
    }
}

function obtenerPublicidad() {
    include 'conn.php';
    try {
        return $conn->query("SELECT id, titulo, imagen, link, cliente, fecha FROM publicidad");
    } catch (Exception $e) {
         echo "Error!" . $e->getMessage() . "<br>";
         return false;
    }
}

function obtenerUsuarios() {
    include 'conn.php';
    try {
        return $conn->query("SELECT id, nombre, correo, imagen, fecha, tipo FROM usuarios");
    } catch (Exception $e) {
         echo "Error!" . $e->getMessage() . "<br>";
         return false;
    }
}

function obtenerNotaNumero($num) {
    include 'conn.php';
    try {
        return $conn->query("SELECT * FROM (
            SELECT * FROM notas ORDER BY id DESC LIMIT $num
        ) sub
        ORDER BY id ASC");
    } catch (Exception $e) {
         echo "Error!" . $e->getMessage() . "<br>";
         return false;
    }
}

function obtenerUltimasNotas($num) {
    include 'conn.php';
    try {
        return $conn->query("SELECT * FROM (
            SELECT * FROM notas ORDER BY id DESC LIMIT 1, $num
        ) sub
        ORDER BY id ASC");
    } catch (Exception $e) {
         echo "Error!" . $e->getMessage() . "<br>";
         return false;
    }
}