<?php include('registro.php');

if (isset($_POST['guardar'])) {
    $Usuario = $_POST['usuario'];
    $Nombre = $_POST['nombre'];
    $Clave = $_POST['clave'];
    $Email = $_POST['email'];
    $FechaNacimiento = $_POST['fechanacimiento'];

    $query = "INSERT INTO Registro VALUES ('$Usuario','$Nombre','$Clave','$Email','$FechaNacimiento')";
    $result =  mysqli_query($conn, $query);
    if(!result){
        die("Query Failed.");
    }
    header('Location: registro.php');
}
?>