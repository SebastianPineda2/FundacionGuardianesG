<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = "bdguardianesg";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recibir datos del formulario
$nombreMascota = $_POST['nombreMascota'];
$nombrePersona = $_POST['nombrePersona'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$categoria = $_POST['categoria'];
$observacion = $_POST['observacion'];

// Query para insertar los datos en la base de datos
$sql = "INSERT INTO agendacitas (nombreMascota, nombrePersona, email, celular, categoria, observacion)
        VALUES ('$nombreMascota', '$nombrePersona', '$email', '$celular', '$categoria', '$observacion')";

if ($conn->query($sql) === TRUE) {
    echo "Los datos fueron enviados correctamente";
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexión
$conn->close();
?>






