<?php
include("php/connection.php"); // Incluye tu archivo de conexión a la base de datos

if (isset($_GET['id'])) {
    $idCita = $_GET['id'];

    // Código para eliminar el registro de la base de datos
    $con = connection(); // Establece la conexión a la base de datos

    $sql = "DELETE FROM agendacitas WHERE idCitas = $idCita"; // Sentencia SQL para eliminar el registro con el ID específico

    if (mysqli_query($con, $sql)) {
        echo "Registro eliminado correctamente.";
    } else {
        echo "Error al eliminar el registro: " . mysqli_error($con);
    }

    mysqli_close($con); // Cierra la conexión a la base de datos
} else {
    echo "ID de cita no proporcionado para eliminar.";
}
?>