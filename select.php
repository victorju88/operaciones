<?php
include("conexion.php");
$sql = "SELECT * FROM cliente";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Nombre: " . $row["nombre"]. "<br>";
    }
} else {
    echo "0 results";
}
mysqli_close($conn);
?>