<!doctype html>
<html>
    <head>
        <title>Formulario</title>
        <meta charset ="UTF-8"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <form method="POST" action= "controllers.php">
                <input type="text" name="nombre_apellido" placeholder="Nombre y apellido">
                <input type="date" name="fecha_nacimiento">
                <input type="text" name="cedula" placeholder="Numero de cedula">
                <input type="text" name="telefono" placeholder="Numero de telefono">
                <input type="text" name="direccion" placeholder="Direccion particular">
                <button type="submit">Guardar</button>
            </form>
        </div>
    </body>
</html>