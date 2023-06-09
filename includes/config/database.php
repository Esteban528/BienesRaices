<?php

function conectarDB () : mysqli {
    $db = mysqli_connect('localhost', 'root', 'esteban123', 'bienesraices_crud');

    if (!$db) {
        echo "Error al conectarse a la base de datos";
        exit;
    }
    return $db;
}