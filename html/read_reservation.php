<?php
include("../admin/bd.php");

// Función para obtener todas las reservas de citas desde la base de datos
function getAllReservations($conn) {
    $sql = "SELECT * FROM reserva_de_citas";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        return $result->fetch_all(MYSQLI_ASSOC);
    } else {
        return [];
    }
}

// Obtener todas las reservas existentes
$reservations = getAllReservations($conn);

// Cerrar la conexión después de obtener los datos
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Reserva de Citas</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>

    <h2>Reservas de Citas</h2>

    <!-- Botones para agregar, modificar y eliminar -->
    <p>
        <a href="new_reservation.php">Agregar</a> |
        <a href="update_reservation.php">Modificar</a> |
        <a href="del_reservation.php">Eliminar</a>
    </p>

    <table>
        <tr>
            <th>ID Reserva</th>
            <th>ID Cliente</th>
            <th>Fecha Reservada</th>
        </tr>

        <?php foreach ($reservations as $reservation) : ?>
            <tr>
                <td><?php echo $reservation['id_reserva']; ?></td>
                <td><?php echo $reservation['id_cliente']; ?></td>
                <td><?php echo $reservation['fecha_reservada']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>

