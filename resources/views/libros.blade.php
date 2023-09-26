<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{!! asset('css/estilos.css') !!}">

    <title>Document</title>
</head>
<body>

    <form action="libros" method="post">
        @csrf
    
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" class="form-control" id="titulo" name="titulo">
        </div>
    
        <div class="form-group">
            <label for="autor">Autor</label>
            <input type="text" class="form-control" id="autor" name="autor">
        </div>
    
        <div class="form-group">
            <label for="editorial">Editorial</label>
            <input type="text" class="form-control" id="editorial" name="editorial">
        </div>
    
        <div class="form-group">
            <label for="fecha_publicacion">Fecha de publicación</label>
            <input type="date" class="form-control" id="fecha_publicacion" name="fecha_publicacion">
        </div>
    
        <div class="form-group">
            <label for="genero">Género</label>
            <select class="form-control" id="genero" name="genero">
                <option value="ficcion">Ficción</option>
                <option value="no_ficcion">No ficción</option>
                <option value="infantil">Infantil</option>
                <option value="juvenil">Juvenil</option>
            </select>
        </div>
    
        <div class="form-group">
            <label for="copias_disponibles">Copias disponibles</label>
            <input type="number" class="form-control" id="copias_disponibles" name="copias_disponibles">
        </div>
    
        <div class="form-group">
            <label for="ubicacion">Ubicación</label>
            <input type="text" class="form-control" id="ubicacion" name="ubicacion">
        </div>
    
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
    
</body>
</html>