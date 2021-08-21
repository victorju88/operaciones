<?php
include("conexion.php");
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$RFC = $_POST["RFC"];
$CURP = $_POST["CURP"];
$calle = $_POST["calle"];
$colonia = $_POST["colonia"];
$delegacion = $_POST["delegacion"];
$correo = $_POST["correo"];
$montoObra = $_POST["montoObra"];
$fechaInicio = $_POST["fechaInicio"];
$fechaFin = $_POST["fechaFin"];
$movil = $_POST["movil"];
$telefono = $_POST["telefono"];
$cp = $_POST["cp"];
//$sql = "INSERT INTO cliente (id,nombre,apellido,RFC,CURP,calle,colonia,delegacion,correo,montoObra) values ('',".$nombre.",".$apellido.",".$RFC.",".$CURP.",".$calle.",".$colonia.",".$delegacion.",".$correo.",".$montoObra.")";
$sql = "INSERT INTO cliente (id,nombre,apellido,RFC,CURP,calle,colonia,delegacion,correo,montoObra,cp) values ('','$nombre','$apellido','$RFC','$CURP','$calle','$colonia','$delegacion','$correo','$montoObra','$cp')";
echo "Connected successfully";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    header("Location:datos.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>