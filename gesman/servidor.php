<?php
// ENCABEZADO HTTP
header('Content-Type: application/json');

// CONFIGURACIÓN DE CONEXIÓN A BASE DE DATOS
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "dbgesman";

// CREAR CONEXIÓN
$conn = new mysqli($servername, $username, $password, $dbname);

// VERIFICAR CONEXIÓN
if ($conn->connect_error) {
    echo json_encode(['error' => 'Conexión fallida: ' . $conn->connect_error]);
    exit;
}
// OBTENER EL PARÁMETRO DE BUSQUEDA.
$search = $_GET['search'] ?? '';

if ($search) {
    $stmt = $conn->prepare("SELECT nombre FROM equipos WHERE nombre LIKE ?");
    $search_param = "%{$search}%";
    $stmt->bind_param("s", $search_param);
    $stmt->execute();
    $result = $stmt->get_result();

    $equipos = [];
    while ($row = $result->fetch_assoc()) {
        $equipos[] = $row;
    }

    echo json_encode($equipos);
    $stmt->close();
} else {
    echo json_encode([]);
}

$conn->close();
?>
