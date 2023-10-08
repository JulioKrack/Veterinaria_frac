<?php

include("../admin/bd.php");

$id_cliente = $_POST['id_cliente'];
$fecha_reservada = $_POST['fecha_reservada'];
$asunto = $_POST['asunto'];
$estado = $_POST['estado'];
$id_administrador = $_POST['id_administrador'];
$id_veterinario = $_POST['id_veterinario'];

$sql = "INSERT INTO reserva_de_citas (id_cliente, fecha_reservada, asunto, estado, id_administrador, id_veterinario)
        VALUES ('$id_cliente', '$fecha_reservada', '$asunto', '$estado', '$id_administrador', '$id_veterinario')";

if ($conn->query($sql) === TRUE) {
    echo "Reservation created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
