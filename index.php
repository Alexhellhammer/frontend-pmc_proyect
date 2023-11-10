
<?php
session_start();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/3f8094d084.js" crossorigin="anonymous"></script>
    <title>PMC GOURMET</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- menu encabezado -->
    <header class="header" id="inicio">
        <img class="bg" src="img\bg.png" alt="">
        <div class="menu container">
            <a href="#" class="logo">
                <img src="img\IMG-20230611-WA0004.jpg" alt="Logo">
            </a>
            <input type="checkbox" id="menu">
            <label for="menu">
                <img src="img\menu.png" class="menu-icono" alt="">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="#Inicio">Inicio</a></li>
                    <li><a href="#Desayunos">Desayunos</a></li>
                    <li><a href="#Productos">Productos</a></li>
                    <li><a href="#Contacto">Contacto</a></li>
                </ul>
            </nav>
            
             <!-- Botón "Ingreso de Cliente" -->
            <a href="<?php echo isset($_SESSION['usuario']) ? 'php/logout.php' : 'registroeingreso.php'; ?>" class="btn-ingreso">
                <?php
                if (isset($_SESSION['usuario'])) {
                    echo '¡Hola, ' . $_SESSION['usuario'] . '!';
                    // Agrega aquí el enlace de "Cerrar Sesión" dentro del bloque del usuario autenticado
                    echo '<a href="php/logout.php" class="btn-cerrar-sesion">Cerrar Sesión</a>';
                } else {
                    echo 'Ingreso de Cliente';
                }
                ?>
            </a>

    
            <div>
                <ul>
                    <li class="submenu">
                        <img src="img\car.svg" id="img-carrito" alt="carrito">
                        <div id="carrito">
                            <table id="lista-carrito">
                                <thead>
                                    <tr>
                                        <th>Imagen</th>
                                        <th>Nombre</th>
                                        <th>Precio</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                            <a href="#" id="vaciar-carrito" class="btn-3"> vaciar carrito</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="header-content container">
            <div class="header-txt">
                <h1> <span>Bienvenido</span> disfruta de nuestros platillos </h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet laboriosam alias eligendi, veritatis saepe et, iure quae doloribus fugiat libero esse aliquam possimus ratione est excepturi modi quidem nulla eveniet.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet laboriosam alias eligendi, veritatis saepe et, iure quae doloribus fugiat libero esse aliquam possimus ratione est excepturi modi quidem nulla eveniet.
                    doloribus fugiat libero esse aliquam possimus ratione est excepturi modi quidem nulla eveniet.
    
                </p>
            </div>
            <div class="header-img">
                <img src="img\pl-1.png" alt="">
            </div>
        </div>
    </header>

  

           <!-- Desayunos -->

    <section class="breakfast container" id="Desayunos">
        <h2>Desayunos</h2>
        <p>
            Horario 9am - 11pm
        </p>
        <div class="breakfast-content">
            <div class="breakfast-1">
                <img src="img\b1.png" alt="">
                <h3>Platillo 1</h3>
            </div>
            <div class="breakfast-1">
                <img src="img\b2.png" alt="">
                <h3>Platillo 2</h3>
            </div>
            <div class="breakfast-1">
                <img src="img\b3.png" alt="">
                <h3>Platillo 3</h3>
            </div>
            <div class="breakfast-1">
                <img src="img\b4.png" alt="">
                <h3>Platillo 4</h3>
            </div>

        </div>
    </section>

<!-- productos -->

    <section class="info" id="Productos">
        <img class="bg-2" src="img\bg-2.png" alt="">
        <div class="info-content container">
            <div class="info-img">
                <img src="img\breakfast.png" alt="">
            </div>
            <div class="info-txt">
                <h2> La mejor calidad en los productos </h2>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum consequatur in culpa neque autem obcaecati hic odio laudantium, distinctio libero dolorem quae iure possimus. Atque ea reprehenderit repellendus dolor aperiam.
                </p>
                <a href="#" class="btn-1"> Informacion </a>
            </div>
        </div>
    </section>


    <main class="products container">
        <h2>Productos</h2>
        <div class="box-container" id="lista-1">
            <div class="box">
                <img src="img\pla1.png" alt="">
                <div class="product-txt">
                    <h3>Paeya</h3>
                    <p>calidad premium</p>
                    <p class="precio">$35.000</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="1">Agregar al carrito</a>
                </div>
            </div>

            <div class="box">
                <img src="img\pla2.png" alt="">
                <div class="product-txt">
                    <h3>Paeya</h3>
                    <p>calidad premium</p>
                    <p class="precio">$35.000</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="2">Agregar al carrito</a>
                </div>
            </div>

            <div class="box">
                <img src="img\pla3.png" alt="">
                <div class="product-txt">
                    <h3>Paeya</h3>
                    <p>calidad premium</p>
                    <p class="precio">$35.000</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="3">Agregar al carrito</a>
                </div>
            </div>

            <div class="box">
                <img src="img\pla4.png" alt="">
                <div class="product-txt">
                    <h3>Paeya</h3>
                    <p>calidad premium</p>
                    <p class="precio">$35.000</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="4">Agregar al carrito</a>
                </div>
            </div>

            <div class="box">
                <img src="img\pla1.png" alt="">
                <div class="product-txt">
                    <h3>Paeya</h3>
                    <p>calidad premium</p>
                    <p class="precio">$35.000</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="5">Agregar al carrito</a>
                </div>
            </div>

            <div class="box">
                <img src="img\pla2.png" alt="">
                <div class="product-txt">
                    <h3>Paeya</h3>
                    <p>calidad premium</p>
                    <p class="precio">$35.000</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="6">Agregar al carrito</a>
                </div>
            </div>

            <div class="box">
                <img src="img\pla3.png" alt="">
                <div class="product-txt">
                    <h3>Paeya</h3>
                    <p>calidad premium</p>
                    <p class="precio">$35.000</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="7">Agregar al carrito</a>
                </div>
            </div>

            <div class="box">
                <img src="img\pla4.png" alt="">
                <div class="product-txt">
                    <h3>Paeya</h3>
                    <p>calidad premium</p>
                    <p class="precio">$35.000</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="8">Agregar al carrito</a>
                </div>
            </div>
        </div>
        <div class="btn-2" id="load-more">Cargar Mas</div>

    </main>

    <!-- nuestra app -->

    <section class="app container">
        <div class="app-txt">
            <h2>Descarga nuestra APP descubre ofertas</h2>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe porro maxime, suscipit cum recusandae doloribus rem laudantium ratione quibusdam possimus minima, beatae omnis eligendi tempora sit, delectus facilis nostrum cupiditate!laudantium, distinctio libero dolorem quae iure possimus. Atque ea reprehenderit repellendus dolor aperiam.
            </p>
            <div class="descarga">
                <img class="app-link" src="img\store1.png" alt="">
                <img class="app-link" src="img\store2.png" alt="">
            </div>
            
        </div>
        <div class="app-img">
            <img src="img\app.png" alt="">
        </div>
    </section>

             <!-- footer -->
     <footer class="footer" id="Contacto">
        <div class="logo-f">
            <a href="#">
            <img src="img\IMG-20230611-WA0004.jpg" alt="">
            </a>
        </div>
        <div class="contain-main-footer">
            <div class="contact">
                <h4 id="contact-title">Datos de contacto</h4>
                <address>
                    <ul>
                        <li>
                            📍 Cra 69 #24c-80 a 24c-98, Bogotá DC
                        </li>
                        <li>
                            &#9993;  <a href="mailto:pmcgourmet@gmail.com">pmcgourmet@gmail.com</a>
                        </li>
                        <li>
                            ☎ Llámanos: +57 3102637661
                        </li>
                    </ul>
                </address>
            </div>
            <div class="descarga">
                <div class="siguenos">
                    <h4>Síguenos</h4>
                    <div>
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-x-twitter"></i>
                    <i class="fa-brands fa-whatsapp"></i>
                    </div>
                </div>
                <h4>Descarga APP</h4>
                <img src="img\store1.png" alt="">
                <img src="img\store2.png" alt="">
            </div> 
            <div class="location">
                <h4>Ubicación</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.64892608572!2d-74.11132122675191!3d656541742042391!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f11!3m3!1m2!1s0x8e3f9b908b6dc693%3A0x5f75527d28d8abd2!2sCra%2069%20%2324c-80%20a%2024c-98%2C%20Bogot%C3%A1!5e0!3m2!1ses-419!2sco!4v16989615576!5m2!1ses-419!2sco"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="copy-right">
            <span>© Copyright 2023 | Sitio creado y administrado por ALXPE S.A</span>
        </div>
    </footer>
            

    <script src="script.js"></script>
</body>
</html>