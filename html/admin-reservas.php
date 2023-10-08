<?php
include("../admin/bd.php")
?>
<!DOCTYPE html>
<lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de reservas</title>
    <link rel="stylesheet" href="../css/admin-reservas.css">
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

    <nav class="menu">
        <div class="menu-items">
            <a href="admin-reservas.php" class="gestion-reservas">Gestionar Reservas</a>
            <a href="#">Gestionar Empleados</a>
        </div>
    </nav>
    <section class="dashboard">

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
        </div>
    </main>
    <!-- programación de animaciones -->
    <!-- <script src="../js/admin-reservas.js"></script> -->

</body>
</html>

