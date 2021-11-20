<?php 
include('db.php');

if (isset($_POST['consultar'])) {
    $Usuario = $_POST['usuario'];
    $Clave = $_POST['clave'];
    $query = "SELECT * FROM Registro WHERE Usuario = '$Usuario' AND Clave = '$Clave'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1){
        header('Location: jugar.html');
        echo 'Inicio sesión';
    }else{
        echo 'no consultó';
    }
}

?>