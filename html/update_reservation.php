<?php
include("../admin/bd.php");

$id_reserva = $_POST['id_reserva'];
$estado = $_POST['estado'];

$sql = "UPDATE reserva_de_citas SET estado='$estado' WHERE id_reserva=$id_reserva";

if ($conn->query($sql) === TRUE) {
    echo "Reservation updated successfully";
} else {
    echo "Error updating reservation: " . $conn->error;
}

$conn->close();
?>
