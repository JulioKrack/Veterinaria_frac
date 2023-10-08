<?php
include("../admin/bd.php");

$sql = "SELECT * FROM reserva_de_citas";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id_reserva"]. " - Cliente ID: " . $row["id_cliente"]. " - Fecha Reservada: " . $row["fecha_reservada"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
