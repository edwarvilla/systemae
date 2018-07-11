<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/registro.css">
</head>
<body>
<h1>formulario de registro</h1>
<form action="menu.php" method="post" class="register">
    <h2 class="form-titulo">CREA UNA CUENTA</h2>
    <div class="contenedor-inputs">
        <input type="text" name="nombre" placeholder="Nombre" class="input-48" required>
        <input type="text" name="apellido" placeholder="Apellido" class="input-48" required>
        <input type="email" name="correo" placeholder="Correo" class="input-100" required>
        <input type="text" name="usuario" placeholder="Usuario" class="input-48"required>
        <input type="password" name="clave" placeholder="Contraseña" class="input-48" required>
        <input type="text" name="telefono" placeholder="Teléfono" class="input-100" required>
        <div class="form-check">
            <label class="form-check-label">
                <input type="checkbox" name="terminos" id="terminos" class="form-check-input mr-2">Acepto los Terminos y Condiciones
            </label>
        </div>
        <input type="submit" value="Registar" class="btn-enviar">
        <p class="form_link">¿ya tienes una cuenta?<a href="#">Ingresa aqui</a></p>
    </div>
</form>
</body>
</html>