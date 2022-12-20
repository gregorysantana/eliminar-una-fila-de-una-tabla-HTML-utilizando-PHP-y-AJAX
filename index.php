<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

</head>
<body>

<h2>This is a heading</h2>

<table style="width:100%">
  <tr>
    <th>Company</th>
    <th>Contact</th>
    <th>Country</th>
    <th>Action</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
    <td><button class="delete-button" data-id="123">Delete</button></td>
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
    <td><button class="delete-button" data-id="124">Delete</button></td>
  </tr>
</table>
<javascript>
$('.delete-button').click(function() {
  // Obtener el ID de la fila a eliminar
  var id = $(this).data('id');

  // Enviar la solicitud AJAX al servidor
  $.ajax({
    url: '/delete.php',
    type: 'POST',
    data: { id: id },
    success: function(response) {
      // Actualizar la tabla HTML aquí si la eliminación fue exitosa
    }
  });
});

  
</javascript>
</body>
</html>
