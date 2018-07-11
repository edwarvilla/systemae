<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.css">

    <title>FORMULARIO</title>

</head>
<body>
<div class="container "  >

    <div class="row justify-content-center">
    <img src="imagenes/logo.png" alt="" style="width: 150px; height: 100px;">
    </div>


        <div class="row justify-content-center">
    <h1 class="text-center mb-3" >Mi Cuenta</h1>
        </div>


    <div class="row justify-content-center " >
        <div class="col-4" >
            <form action="">

                <div class="form-inline">
                    <label for="email">Usuario</label>
                    <input type="text" class="form-control" placeholder="Usuario" name="usuario" id="usuario">
                      
                    
                </div>



            	 <div class="form-inline">
                    <label for="pass">Contraseña</label>
                    <input type="password" class="form-control" placeholder="Contraseña" name="pass" id="pass">
                </div>
                <div class="form-inline">
                    <label for="for">titulo</label>
                    <select name="" id="" class="custom-select">
                        <option value="1" selected>1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>

                <div class="form-group">
               		 <label for="comment">Comment:</label>
              		 <textarea class="form-control" rows="5" id="comment"></textarea>
     			</div>

     			<div class="form-check">
 				 <label class="form-check-label">
 				 <p>Seleccione una opcion</p>
    			<input type="radio" class="form-check-input" name="optradio">Hombre </br>
    			<input type="radio" class="form-check-input" name="optradio">Mujer
 				 </label>
				</div>

                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" name="terminos" id="terminos" class="form-check-input mr-2">Guardar contraseña
                    </label>
                </div>



                <div class="col-12 text-center">
                <div class="row justify-content-center mt-1">
                    <div class="col-12 " >
                        <button class="btn btn-primary " type="submit">Iniciar Sesion</button>
                    </div>
                </div>
                </div>

                <h3 class="text-center mt-1 mb-1" >----------O---------</h3>

                <div class=" col-12 text-center">
                    <div class="row justify-content-center mt-1">
                        <div class="col-12 ">
                            <button class="btn btn-warning " type="submit">Continuar en facebook</button>
                        </div>
                    </div>
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
