
<?php
include("../admin/bd.php");

// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_cliente = $_POST['id_cliente'];
    $fecha_reservada = $_POST['fecha_reservada'];
    $asunto = $_POST['asunto'];
    $estado = $_POST['estado'];
    $id_administrador = $_POST['id_administrador'];
    $id_veterinario = $_POST['id_veterinario'];

    // Validar datos (puedes agregar más validaciones según tus necesidades)

    // Insertar datos en la base de datos
    $sql = "INSERT INTO reserva_de_citas (id_cliente, fecha_reservada, asunto, estado, id_administrador, id_veterinario)
            VALUES ('$id_cliente', '$fecha_reservada', '$asunto', '$estado', '$id_administrador', '$id_veterinario')";

    if ($conn->query($sql) === TRUE) {
        echo "Reservation created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Form</title>
</head>
<body>

    <!-- Formulario para insertar datos -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="id_cliente">ID Cliente</label>
        <input type="text" name="id_cliente" id="id_cliente" required>
        <br>
        <label for="fecha_reservada">Fecha Reservada</label>
        <input type="text" name="fecha_reservada" id="fecha_reservada" required>
        <br>
        <label for="asunto">Asunto</label>
        <input type="text" name="asunto" id="asunto" required>
        <br>
        <label for="estado">Estado</label>
        <input type="text" name="estado" id="estado" required>
        <br>
        <label for="id_administrador">ID Administrador</label>
        <input type="text" name="id_administrador" id="id_administrador" required>
        <br>
        <label for="id_veterinario">ID Veterinario</label>
        <input type="text" name="id_veterinario" id="id_veterinario" required>
        <br>
        <input type="submit" value="Submit">
    </form>

</body>
</html>
