<?php
session_start();

$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'proyecto'
)or die (mysqli_connect($mysqli));
if (isset($conn)){
  echo "Base de datos conectada";
}

?>