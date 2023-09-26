<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Formulario de préstamo</title>
  <link rel="stylesheet" href="{!! asset('css/estilos.css') !!}">

</head>
<body>
    <h1>ya lacaga yordi</h1>
  <h1>Formulario de préstamo</h1>

  <form action="enviar-prestamo.php" method="post">
    <label for="nombres">Nombres:</label>
    <input type="text" name="nombres" id="nombres" required>

    <label for="apellidos">Apellidos:</label>
    <input type="text" name="apellidos" id="apellidos" required>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>

    <label for="telefono">Teléfono:</label>
    <input type="tel" name="telefono" id="telefono" required>

    <label for="direccion">Dirección:</label>
    <input type="text" name="direccion" id="direccion" required>

    <label for="fecha">Fecha del préstamo:</label>
    <input type="date" name="fecha" id="fecha" required>

    <input type="submit" value="Enviar">
  </form>
</body>
</html>
