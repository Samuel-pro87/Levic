<?php require_once 'includes/header.php'; ?>

<!--   CONTENEDOR PRINCIPAL-->
<div class="container-fluid">
    <!--FILA UNO-->
    <div class="row pt-2">   

        <!--CREAMOS COLUMNA UNO DE FILA UNO-->
        <div class="col-7">
            <img src="images/imgr/logo.jpg" class="img-thumbnail w-100 h-50" alt="RH"/>
        </div><!--FIN DE LA COLUMNA UNO DE LA FILA UNO-->

     
        <!--COLUMNA DOS FILA DOS-->
        <div class="col-7">
            <div class="row justify-content-center"> 

                <!--TARJETA-->
                <div class="card w-40">
                    <form action="includes/ingresar-usuario.php" method="POST">  
                        <div class="card-header bg-info">
                            <h2 class="text-center">** LOGGIN **</h2>
                        </div>
                        <div class="card-body bg-ligth">
                            <div class="row">
                                <div class="col-2 justify-content-center bg-light rounded" style="font-size: 2em"> 
                                    <svg class="bi bi-person-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div class="col-10 justify-content-center"> 
                                    <input type:="text" class="form-control" name="email" placeholder="Usuario" autofocus required><br>
                                </div> 
                            </div>
                            <div class="row">
                                <div class="col-2 justify-content-center bg-light rounded" style="font-size: 2em"> 
                                    <svg class="bi bi-unlock-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M.5 9a2 2 0 012-2h7a2 2 0 012 2v5a2 2 0 01-2 2h-7a2 2 0 01-2-2V9z"/>
                                    <path fill-rule="evenodd" d="M8.5 4a3.5 3.5 0 117 0v3h-1V4a2.5 2.5 0 00-5 0v3h-1V4z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div class="col-10 justify-content-center"> 
                                    <input type="password" name="password" class="form-control" placeholder="Password" required>   <br>      
                                </div> 
                            </div>
                            <div class="card-footer">   
                                <div class=" row justify-content-center">
                                    <button type="submit" class="btn btn-primary text-center"> Validar </button>
                                </div>
                            </div>
                    </form>
                </div>
            </div> <!--FIN DE LA COLUMNA DOS FILA DOS-->

        </div> <!-- FIN FILA DOS-->
        <!--COLUMNA TRES FILA DOS-->
        <div class="col-2">
            <!--        <div class="row badge-info justify-content-center"> <h5>   Datos Validados
                            </h5></div>-->
        </div>

        <!--FILA TRES-->
        <div class="row">   
            <!--<p> Selecciona IDIOMA ====  <a href="#">Ingles</a> ====  <a href="#">Portugues</a></p>-->

        </div> <!-- FIN FILA TRES-->

    </div><!-- FIN DEL CONTENEDOR PRINCIPAL-->
    <?php require_once 'includes/footer.php'; ?>