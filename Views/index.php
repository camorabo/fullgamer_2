<?php

define('CONTROLLER_PATH', '../Controller/');
define('VIEWS_PATH', '../Views/');
define('MODELS_PATH', '../Models/');
define('CSS_PATH', '../css/');
define('JS_PATH', '../js/');
define('IMG_PATH', '../img/');


include(VIEWS_PATH . "header.php");
require_once(CONTROLLER_PATH . "comentarios_index.php");
?>

<body style="background-color: #8D0801;">
    <!--<H1></H1>
  <h1 style='text-align:center'>FULLGAMER</h1>
  &nbsp;
  style="background-color: #F4D58D;"
    -->
    <br></br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <img src="../img/Welcome.png" class="d-block w-100" alt="..." />
            </div>
            <div class="col-md-8">
                <img src="../img/BARRA.png" class="d-block w-100" alt="..." />
            </div>
            <div class="col-md-2">
                <img src="../img/INTRO.jpg" class="d-block w-100" alt="..." />
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <img src="../img/ctxt_2.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="../img/Inc.jpg" class="d-block w-100" alt="..." />
                                <div class="carousel-caption d-none d-md-block">
                                    <h3></h3>
                                    <p style="font-family: Georgia, 'Oleo Script Swash Caps', Times,serif;">
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="../img/Inc_0.jpg" class="d-block w-100" alt="..." />
                                <div class="carousel-caption d-none d-md-block">
                                    <h3></h3>
                                    <p style="font-family: Georgia, 'Oleo Script Swash Caps', Times,serif;">
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="../img/Inc_1.jpg" class="d-block w-100" alt="..." />
                                <div class="carousel-caption d-none d-md-block">
                                    <h3></h3>
                                    <p style="font-family: Georgia, 'Oleo Script Swash Caps', Times,serif;">
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="../img/inc2.JPG" class="d-block w-100" alt="..." />
                                <div class="carousel-caption d-none d-md-block">
                                    <h3></h3>
                                    <p style="font-family: Georgia, 'Oleo Script Swash Caps', Times,serif;">
                                    </p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <br></br>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <img src="../img/ctxt_3.jpg" class="d-block w-100" alt="..." />
            </div>
        </div>

        <div background="../img/supernintendo.jpg">
            <h1 style="text-align: center; color:antiquewhite">¿Y cómo te ha parecido nuestra página?</h1>
            <BR>
            <div class="container-fluid">
                <div class="row">
                    <div class="row">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-6">
                            <div id="opiniones" style="display: block">
                                <?php
                                $result = getAllComments();
                                if ($result != null) {
                                    //Vamos a recorrer la bd
                                    while ($viaje = mysqli_fetch_assoc($result)) {
                                        //Para enviar mas de un parametro se usa ?
                                ?>
                                        <div class="card" style="background-color: #001427;">
                                            <div class="card-body">
                                                <h5 class="card-title"> <?php echo $viaje["nombre"]; ?> </h5>
                                                <p><?php echo $viaje["comentario"]; ?></p>
                                            </div>
                                        </div>

                                <?php
                                    }
                                }
                                ?>
                                </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="row">
                                <form method="POST" action="<?php echo CONTROLLER_PATH; ?>comentarios_index.php">
                                    <div class="card" style="background-color: #001427;">
                                        <div class="card-body">
                                            <h5 class="card-title">Comentarios</h5>
                                            <!--Aquí va el formulario-->
                                            <form role="form">
                                                <div class="form-group">
                                                    <label for="nombre">Nombre</label>
                                                    <input type="text" class="form-control" style="background-color: #708D81;" id="nombre" name="nombre" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="comentario">Comentario</label>
                                                    <textarea id="comentario" name="comentario" cols="30" rows="10" style="background-color: #708D81;" class="form-control"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <input type="hidden" name="nuevo_comentario">
                                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
<?php
include(VIEWS_PATH . "footer.php");
?>