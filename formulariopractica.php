<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.css">

    <title>formulario</title>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <form action="">
             <div class="form-group">
                 <label for="nombre">Nombre</label>
                 <input type="text" class="form-control" name="Nombre" placeholder="Nombre">
             </div>
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="Nombre" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <label for="titulo">Titulo</label>
                    <select class="form-control" name="titulo">
                        <option>selecionar</option>
                        <option value="computacion">Computación</option>
                        <option value="contabilidad">Contabilidad</option>
                        <option value="enfermeria">Enfermeria</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="detalles">Detalles:</label>
                    <br>
                    <textarea name="detalles" cols="30" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label for="telefono">Gustaria ser Contactado:<br>
                    <input class="form-check-input" type="radio" name="opcionradio" value="si">si <br>
                        <input class="form-check-input" type="radio" name="opcionradio" value="no">no
                    </label>
                </div>

            </form>
        </div>
    </div>
</div>



<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>