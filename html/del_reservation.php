<?php
include("../admin/bd.php");

$id_reserva = $_POST['id_reserva'];

$sql = "DELETE FROM reserva_de_citas WHERE id_reserva=$id_reserva";

if ($conn->query($sql) === TRUE) {
    echo "Reservation deleted successfully";
} else {
    echo "Error deleting reservation: " . $conn->error;
}

$conn->close();
?>
