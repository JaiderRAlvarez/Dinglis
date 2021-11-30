<?php
include ('db.php');

if (isset($_POST['Calificar']))
{
   $usuario = $_SESSION['usuario'];
   $calificacion = $_POST['calificacion'];

   $query = "INSERT INTO calificacion(Usuario, Calificacion) values ('$usuario','$calificacion')";
   $result = mysqli_query($conn, $query);
   if (!$result)
   {
      $_SESSION['message'] = 'Error: Ya votaste';
      header('Location: calificanos.php');
   }
   else
   {
      header('Location: calificanos.php');
   }

}

?>
