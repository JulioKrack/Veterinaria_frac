<?php

include("../admin/bd.php");

// Create a new reservation
function createReservation($idCliente, $fechaReservada, $asunto, $estado, $idAdministrador, $idVeterinario) {
  global $conn;

  $sql = "INSERT INTO reserva_de_citas (id_cliente, fecha_reservada, asunto, estado, id_administrador, id_veterinario) VALUES (:id_cliente, :fecha_reservada, :asunto, :estado, :id_administrador, :id_veterinario)";

  $stmt = $conn->prepare($sql);

  $stmt->bindParam(':id_cliente', $idCliente);
  $stmt->bindParam(':fecha_reservada', $fechaReservada);
  $stmt->bindParam(':asunto', $asunto);
  $stmt->bindParam(':estado', $estado);
  $stmt->bindParam(':id_administrador', $idAdministrador);
  $stmt->bindParam(':id_veterinario', $idVeterinario);

  $stmt->execute();
}

// Read all reservations
function readReservations() {
  global $conn;

  $sql = "SELECT * FROM reserva_de_citas";

  $stmt = $conn->prepare($sql);

  $stmt->execute();

  $reservations = $stmt->fetchAll(PDO::FETCH_ASSOC);

  return $reservations;
}

// Update a reservation
function updateReservation($idReserva, $idCliente, $fechaReservada, $asunto, $estado, $idAdministrador, $idVeterinario) {
  global $conn;

  $sql = "UPDATE reserva_de_citas SET id_cliente = :id_cliente, fecha_reservada = :fecha_reservada, asunto = :asunto, estado = :estado, id_administrador = :id_administrador, id_veterinario = :id_veterinario WHERE id_reserva = :id_reserva";

  $stmt = $conn->prepare($sql);

  $stmt->bindParam(':id_reserva', $idReserva);
  $stmt->bindParam(':id_cliente', $idCliente);
  $stmt->bindParam(':fecha_reservada', $fechaReservada);
  $stmt->bindParam(':asunto', $asunto);
  $stmt->bindParam(':estado', $estado);
  $stmt->bindParam(':id_administrador', $idAdministrador);
  $stmt->bindParam(':id_veterinario', $idVeterinario);

  $stmt->execute();
}

// Delete a reservation
function deleteReservation($idReserva) {
  global $conn;

  $sql = "DELETE FROM reserva_de_citas WHERE id_reserva = :id_reserva";

  $stmt = $conn->prepare($sql);

  $stmt->bindParam(':id_reserva', $idReserva);

  $stmt->execute();
}

// Example usage:

$idCliente = 1;
$fechaReservada = "2023-10-08 10:00:00";
$asunto = "Vacunación";
$estado = "Pendiente";
$idAdministrador = 1;
$idVeterinario = 2;

// Create a new reservation
createReservation($idCliente, $fechaReservada, $asunto, $estado, $idAdministrador, $idVeterinario);

// Read all reservations
$reservations = readReservations();

// Update a reservation
$idReserva = 1;
$newFechaReservada = "2023-10-09 11:00:00";
updateReservation($idReserva, $idCliente, $newFechaReservada, $asunto, $estado, $idAdministrador, $idVeterinario);

// Delete a reservation
deleteReservation($idReserva);
