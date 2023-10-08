<?php

include("../admin/bd.php");

$id_cliente = isset($_POST['id_cliente']) ? $_POST['id_cliente'] : '';
$fecha_reservada = isset($_POST['fecha_reservada']) ? $_POST['fecha_reservada'] : '';
$asunto = isset($_POST['asunto']) ? $_POST['asunto'] : '';
$estado = isset($_POST['estado']) ? $_POST['estado'] : '';
$id_administrador = isset($_POST['id_administrador']) ? $_POST['id_administrador'] : '';
$id_veterinario = isset($_POST['id_veterinario']) ? $_POST['id_veterinario'] : '';

$sql = "INSERT INTO reserva_de_citas (id_cliente, fecha_reservada, asunto, estado, id_administrador, id_veterinario)
        VALUES ('$id_cliente', '$fecha_reservada', '$asunto', '$estado', '$id_administrador', '$id_veterinario')";

$result = $mysqli->query($sql);

if (!$result) {
    die('Error: ' . $mysqli->error);
} else {
    echo "Registro de cita exitoso";
}

$mysqli->close();
?>
