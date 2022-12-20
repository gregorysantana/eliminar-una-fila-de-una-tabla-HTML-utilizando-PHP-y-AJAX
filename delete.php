<?php
  // Conectarse a la base de datos
  $conn = mysqli_connect('localhost', 'username', 'password', 'database');

  // Obtener el ID de la fila a eliminar
  $id = $_POST['id'];

  // Ejecutar la consulta de eliminación
  $sql = "DELETE FROM table WHERE id = $id";
  mysqli_query($conn, $sql);

  // Cerrar la conexión a la base de datos
  mysqli_close($conn);
