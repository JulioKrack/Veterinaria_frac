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
    <link rel="stylesheet" href="../css/admin-reservas.css">
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
<header class="h-sup">
        <h2 class="panel"><span class="pa-admin">Panel de Administración</span></h2>
        <div class="superior">
            <div class="photo-user">
                <img src="../img/usuario-admin.png" alt="logo" class="user-img">
            </div>
            <div class="logout">
                <a href="index.html" class="cerrar-sesion">Cerrar Sesión</a>
            </div>
        </div>

    </header>


        <section class=menu-gestiones>
            <nav class="menu">
                <div class="menu-items">
                    <a href="admin-reservas.php" class="gestion-reservas">Gestionar Reservas</a>
                    <a href="#">Gestionar Empleados</a>
                </div>
            </nav>
        </section>


    <!-- make tree buttoms of cruds in the main -->

    <main class="main">
        <div class="main-items">
            <div class="main-item">
                <a href="new_reservation.php" class="new-reservation">Nueva Reserva</a>
            </div>
            <div class="main-item">
                <a href="read_reservation.php" class="read-reservation">Ver Reservas</a>
            </div>
            <div class="main-item">
                <a href="del_reservation.php" class="del-reservation">Eliminar Reserva</a>
            </div>
            <div class="main-item">
                <a href="crud_reservation.php" class="crud-reservation">crud Reserva</a> 
            </div>
            <div class="main-item">
                <a href="update_reservation.php" class="update_reservation">Actualizar Reserva</a>
            </div>
        </div>
    </main>
    
    <div class="content">
        <h2>Reservas de Citas</h2>

        <!-- Botones para agregar, modificar y eliminar -->
        <p>
            <a href="new_reservation.php">Agregar</a> |
            <a href="update_reservation.php">Modificar</a> |
            <a href="del_reservation.php">Eliminar</a>
        </p>

    </div>

    <section class="dashboard">
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
    </section>


</body>
</html>

