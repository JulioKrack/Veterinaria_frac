
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- insertar datos para el php -->
    <form action="new_reservation.php" method="post">
        <label for="id_cliente">ID Cliente</label>
        <input type="text" name="id_cliente" id="id_cliente">
        <br>
        <label for="fecha_reservada">Fecha Reservada</label>
        <input type="text" name="fecha_reservada" id="fecha_reservada">
        <br>
        <label for="asunto">Asunto</label>
        <input type="text" name="asunto" id="asunto">
        <br>
        <label for="estado">Estado</label>
        <input type="text" name="estado" id="estado">
        <br>
        <label for="id_administrador">ID Administrador</label>
        <input type="text" name="id_administrador" id="id_administrador">
        <br>
        <label for="id_veterinario">ID Veterinario</label>
        <input type="text" name="id_veterinario" id="id_veterinario">
        <br>
        <input type="submit" value="Submit">
        
        <?php
include("../admin/bd.php");

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $id_cliente = isset($_POST['id_cliente']) ? $_POST['id_cliente'] : '';
    $fecha_reservada = isset($_POST['fecha_reservada']) ? $_POST['fecha_reservada'] : '';
    $asunto = isset($_POST['asunto']) ? $_POST['asunto'] : '';
    $estado = isset($_POST['estado']) ? $_POST['estado'] : '';
    $id_administrador = isset($_POST['id_administrador']) ? $_POST['id_administrador'] : '';
    $id_veterinario = isset($_POST['id_veterinario']) ? $_POST['id_veterinario'] : '';

    // Check if the required fields are not empty
    if (!empty($id_cliente) && !empty($fecha_reservada) && !empty($asunto) && !empty($estado) && !empty($id_administrador) && !empty($id_veterinario)) {
        // TODO: Validate the data before inserting into the database

        // Insert data into the database
        $sql = "INSERT INTO reserva_de_citas (id_cliente, fecha_reservada, asunto, estado, id_administrador, id_veterinario)
                VALUES ('$id_cliente', '$fecha_reservada', '$asunto', '$estado', '$id_administrador', '$id_veterinario')";

        if ($conn->query($sql) === TRUE) {
            echo "Reservation created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "One or more required fields are empty.";
    }
} else {
    echo "Form not submitted.";
}

$conn->close();
?>
</body>
</html> 

