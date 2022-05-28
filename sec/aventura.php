<?php

define('CONTROLLER_PATH', '../Controller/');
define('VIEWS_PATH', '../Views/');
define('MODELS_PATH', '../Models/');
define('CSS_PATH', '../css/');
define('JS_PATH', '../js/');
define('IMG_PATH', '../img/');


include(VIEWS_PATH . "header.php");
?>

<body style="background-color: rgb(0, 0, 163)">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-7 mt-4">
                        <h4 class="" id="titulo" style="color:rgb(141, 62, 245)" , style="float:center;">Inicio -> Aventura</h4>
                    </div>

                    <section>
                        <div class="customer-feedback">
                            <div class="container text-center">
                                <div class="row">
                                    <div class="col-sm-offset-2 col-sm-8">
                                    </div>
                                </div>
                                <h1 style='text-align:center'>AVENTURA</h1>
                                <div class="col-md-4">
                                    <img style="float: left;" class="d-block w-100" alt="..." src="../img/aventura.jpg" style="height: 18cm;" />

                                    <div class="row" style="float: left;">
                                        <div class="feedback-slider-item">
                                            <h3 class="customer-name">Descripción:</h3>
                                            <p>Los videojuegos de aventura son un género de videojuegos, caracterizados por la investigación
                                                , exploración, la solución de rompecabezas, la interacción con personajes del videojuego,
                                                y un enfoque en el relato en vez de desafíos basados en reflejos . Es importante observar
                                                que este término no tiene relación con las películas y novelas de aventura y no es indicativo
                                                del tema o del sujeto que trata. La vasta mayoría de videojuegos de aventura son videojuegos
                                                de computadora, aunque los videojuegos de aventura de videoconsola no son desconocidos por lo mucho.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <h1 style='text-align:center ; color:white'>TOP DE JUEGOS</h1>
                    &nbsp;
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card mb-3" style="background-color: rgb(211, 185, 99);">
                                    <h3 class="card-header"> POKEMON </h3>
                                    <img src="../img/POKEMON.jpg" class="d-block user-select-none" width="100%" height="200" alt="POKEMON" aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
                                    <div class="card-body">
                                        <p class="card-text">La serie se divide en generaciones Pokémon, las cuales son los grupos de videojuegos
                                            lanzados en un cierto período y que comparten una serie de características similares, concretamente
                                            los personajes y criaturas y la región donde se sucede la historia. Estas generaciones
                                            suelen corresponderse con las generaciones de las consolas. La aparición sucesiva de generaciones
                                            suele tener como consecuencia la publicación de nuevas entregas de diversos productos derivados de
                                            los videojuegos, como la serie de anime Pokémon.</p>
                                    </div>

                                    <div class="card-footer">
                                        Fecha de Lanzamiento: 06/07/2016
                                    </div>

                                    <div class="card-footer">

                                        <body>
                                            <form style='text-align:center'>
                                                <a href="https://www.pokemon.com/el/">
                                                    <input type="button" value="MAS..">
                                                </a>
                                            </form>
                                        </body>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card mb-3" style="background-color:#0f1636;">
                                    <h3 class="card-header"> Mario Bros</h3>
                                    <img src="../img/mariobros.jpg" class="d-block user-select-none" width="100%" height="200" alt="MarioBros" aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
                                    <div class="card-body">
                                        <p class="card-text">Es un videojuego de plataformas, diseñado por Shigeru Miyamoto,
                                            producido por la empresa japonesa Nintendo,
                                            para la consola Nintendo Entertainment System. El juego describe las aventuras
                                            de los hermanos Mario y Luigi, personajes que ya protagonizaron el arcade Mario Bros.
                                            En esta ocasión ambos deben rescatar a la Princesa Peach del Reino Champiñón
                                            que fue secuestrada por el rey de los Koopas, Bowser. A través de ocho diferentes mundos,
                                            los jugadores pueden controlar a alguno de los dos hermanos..</p>
                                    </div>

                                    <div class="card-footer">
                                        Fecha de Lanzamiento: 13/09/1985
                                    </div>

                                    <div class="card-footer">

                                        <body>
                                            <form style='text-align:center'>
                                                <a href="https://mario.nintendo.com/es/history/">
                                                    <input type="button" value="MAS..">
                                                </a>
                                            </form>
                                        </body>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card mb-3" style="background-color:#b10606;">
                                    <h3 class="card-header"> God of War</h3>
                                    <img src="../img/godofwar.jpg" class="d-block user-select-none" width="100%" height="200" alt="God of War" aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
                                    <div class="card-body">
                                        <p class="card-text">Es una serie de videojuegos hack and slash creada por SCE Santa Monica
                                            Studio y distribuida por Sony Computer Entertainment. Se basa en las aventuras de un semidiós
                                            espartano, Kratos, quien se enfrenta a diversos personajes de la mitología griega y nórdica,
                                            tanto héroes; especies mitológicas; dioses griegos, titanes y dioses primordiales.
                                            Aunque el guerrero espartano acostumbra enemistad con la mayoría de los dioses, recibe ayuda de muchos
                                            de ellos en algún momento de cada entrega, en especial de Atenea.</p>
                                    </div>

                                    <div class="card-footer">
                                        Fecha de Lanzamiento: 22/03/2005
                                    </div>

                                    <div class="card-footer">

                                        <body>
                                            <form style='text-align:center'>
                                                <a href="https://www.playstation.com/es-co/god-of-war/">
                                                    <input type="button" value="MAS..">
                                                </a>
                                            </form>
                                        </body>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card mb-3" style="background-color:#2a7023;">
                                    <h3 class="card-header"> CRASH </h3>
                                    <img src="../img/crash.png" class="d-block user-select-none" width="100%" height="200" alt="crash  " aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
                                    <div class="card-body">
                                        <p class="card-text">Crash es el nombre de una serie de videojuegos protagonizado por el
                                            personaje del mismo nombre. Fue creada en 1996 por Naughty Dog, quien desarrolló
                                            los primeros cuatro títulos, bajo la distribución de Universal Interactive Studios.
                                            Los tres primeros juegos pertenecen al género de plataformas, sin embargo, con el
                                            tiempo se fue diversificando a otros géneros. La serie ha vendido más de 50 millones
                                            de copias en todo el mundo. El personaje fue creado con el propósito de ser la mascota
                                            de Sony en su primera consola, PlayStation. </p>
                                    </div>

                                    <div class="card-footer">
                                        Fecha de Lanzamiento: 09/09/1996
                                    </div>

                                    <div class="card-footer">

                                        <body>
                                            <form style='text-align:center'>
                                                <a href="https://www.crashbandicoot.com/content/atvi/crash/hub/web/es/hub.html">
                                                    <input type="button" value="MAS..">
                                                </a>
                                            </form>
                                        </body>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card mb-3" style="background-color:#b10606;">
                                    <h3 class="card-header">LittleBigPlanet</h3>
                                    <img src="../img/LittleBigPlanet.jpg" class="d-block user-select-none" width="100%" height="200" alt="LittleBigPlanet" aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
                                    <div class="card-body">
                                        <p class="card-text">Los jugadores controlarán pequeños personajes apodados sackboy, dependiendo
                                            de su material y apariencia. Cada uno puede correr y saltar, así como colgarse, arrastrar y
                                            empujar objetos. Los jugadores usan estas habilidades de diferentes formas: para jugar y explorar
                                            los ambientes del juego, en los que predominan las acciones de los juegos de plataforma como saltar,
                                            empujar, agarrarse y correr. El juego hace uso de un poderoso motor físico para crear su propio
                                            contenido, como por ejemplo ubicar etiquetas adhesivas en los niveles, así mismo se puede utilizar
                                            el editor de niveles para crear, destruir, editar y manipular niveles para finalmente compartirlos.</p>
                                    </div>

                                    <div class="card-footer">
                                        Fecha de Lanzamiento: 07/01/2008
                                    </div>

                                    <div class="card-footer">

                                        <body>
                                            <form style='text-align:center'>
                                                <a href="https://www.mediamolecule.com/games/littlebigplanet">
                                                    <input type="button" value="MAS..">
                                                </a>
                                            </form>
                                        </body>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card mb-3" style="background-color:#2a7023;">
                                    <h3 class="card-header">RAYMAN</h3>
                                    <img src="../img/rayman.jpg" class="d-block user-select-none" width="100%" height="200" alt="Need for Speed: Payback" aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
                                    <div class="card-body">
                                        <p class="card-text"> La serie estar ambientada en un mundo mágico y fantástico que presenta
                                            una ampliar gama de entornos que a menudo se basan en ciertos temas,
                                            un paisaje hecho completamente de papelería. Los juegos principales de la serie son plataformas,
                                            pero hay varios títulos derivados de la saga de otros géneros,
                                            un ser mágico reconocido por su coraje y determinación que con ayuda de sus amigos, debe salvar
                                            su mundo de varios villanos.
                                            Rayman es una franquicia de Videojuego de plataformas, creada por el diseñador de videojuegos
                                            Michel Ancel para Ubisoft. Desde el lanzamiento del juego original
                                            la serie ha producido un total de 45 juegos en múltiples plataformas.</p>
                                    </div>

                                    <div class="card-footer">
                                        Fecha de Lanzamiento: 01/09/1995
                                    </div>

                                    <div class="card-footer">

                                        <body>
                                            <form style='text-align:center'>
                                                <a href="https://www.ubisoft.com/es-mx/game/rayman/legends">
                                                    <input type="button" value="MAS..">
                                                </a>
                                            </form>
                                        </body>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card mb-3" style="background-color:#0f1636;">
                                    <h3 class="card-header">Dante's Inferno</h3>
                                    <img src="../img/dante_inferno.jpg" class="d-block user-select-none" width="100%" height="200" alt="Dante's Inferno" aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
                                    <div class="card-body">
                                        <p class="card-text">es un videojuego de acción perteneciente al género secundario hack and slash
                                            desarrollado por Visceral Games y publicado por Electronic Arts para PlayStation 3, Xbox 360
                                            (en la cual fue censurado por un año) y PlayStation Portable. Está basado en la primera parte de
                                            la Divina Comedia del poeta Dante Alighieri. Narra la historia de Dante, un caballero Templario
                                            que tras volver de una sangrienta cruzada, descubre que su amada Beatriz ha muerto y debe de bajar
                                            hasta el infierno para salvar su alma de las manos de Lucifer. Este juego es promocionado en el
                                            sitio de la WWE en la cual se añadió a Dante como parte del Roster de Friday Night SmackDown!.</p>
                                    </div>

                                    <div class="card-footer">
                                        Fecha de Lanzamiento: 05/02/2010
                                    </div>

                                    <div class="card-footer">

                                        <body>
                                            <form style='text-align:center'>
                                                <a href="https://www.ea.com/es-mx/games/dantes-inferno">
                                                    <input type="button" value="MAS..">
                                                </a>
                                            </form>
                                        </body>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card mb-3" style="background-color:rgb(211, 185, 99);">
                                    <h3 class="card-header">DonkeyKong</h3>
                                    <img src="../img/kong.jpg" class="d-block user-select-none" width="100%" height="200" alt="DonkeyKong" aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
                                    <div class="card-body">
                                        <p class="card-text">El juego original Donkey Kong de arcade fue creado cuando Nintendo asignó
                                            a Shigeru Miyamoto a convertir el Radar Scope -un juego que había sido lanzado para probar audiencias
                                            con malos resultados- en un juego que atraería más a los estadounidenses. El resultado fue un gran
                                            avance para Nintendo y para la industria del videojuego. Las ventas de la máquina fueron rápidas,
                                            con el juego convirtiéndose en una de las máquinas de arcade más vendidas de principios de los
                                            ochenta. El juego en sí fue una gran mejora con respecto a otros juegos de su tiempo, y con la
                                            creciente base de arcadas para vender, pudo obtener una gran distribución. En el juego "Jumpman"
                                            (Salto).</p>
                                    </div>

                                    <div class="card-footer">
                                        Fecha de Lanzamiento: 09/07/1981
                                    </div>

                                    <div class="card-footer">

                                        <body>
                                            <form style='text-align:center'>
                                                <a href="https://donkeykong.nintendo.com/tropical-freeze/es/">
                                                    <input type="button" value="MAS..">
                                                </a>
                                            </form>
                                        </body>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<?php
include(VIEWS_PATH . "footer.php");
?>