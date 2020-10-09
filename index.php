<!DOCTYPE html>
<html lang = es>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" href = "src/css/styles.css" type ="TEXT/CSS">
        <title>Main index</title>
    </head>

    <body>
        <header>
            <nav class="fixed closed">
                <a href = "" class = "brand-logo center">LOGO</a>
                <div class="sidenav-trigger hide show-on-small-and-down right">
                    <button class="menu" onclick="this.parentNode.parentNode.classList.toggle('opened');this.parentNode.parentNode.classList.toggle('closed');this.setAttribute('aria-expanded', this.classList.contains('opened'))" aria-label="Main Menu">
                        <svg width="40" height="40" viewBox="0 0 100 100">
                          <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                          <path class="line line2" d="M 20,50 H 80" />
                          <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
                        </svg>
                      </button>
                </div>
                <div class="sidenav-trigger right">
                    <!--Aqui iria el icono del carrito xd-->
                </div>
                <!--ESta cerrado por el hide-->
                <aside class="show">
                    <div>
                        <ul>
                            <li><a href="">Entrenamiento</a></li>
                            <li><a href="">Dieta</a></li>
                            <li><a href="">Nosotros</a></li>
                            <li><a href="">Contacto</a></li>
                        </ul>
                    </div>
                    <div>
                    </div>
                </aside>
                <ul class="hide-on-small-and-down">
                    <li><a href="">Entrenamiento</a></li>
                    <li><a href="">Dieta</a></li>
                    <li><a href="">Nosotros</a></li>
                    <li><a href="">Contacto</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <section class="background">
                <div class="background-filter"></div>
                <div>
                    <h1>ASTRAFIT</h1>
                    <H2>LA SALUD NO LO ES TODO, PERO SIN ELLA TODO LO DEMÁS ES NADA</H2>
                    <a href="entrenamiento.html">¡EMPIEZA YA!</a>
                </div>
            </section>
            <section class="divider hide-on-small-and-down">
            </section>
            <section class="information">
                <div class="cards">
                    <div class="card">
                        <div class="card-image">
                            <img src="src/img/background-main-screen.jpg" alt="">
                        </div>
                        <div class="card-content">
                            <h2>Hola mundo</h2>
                            <p>Aqui va información acerca de este apartado</p>
                        </div>
                    </div>
                    <div class="card text-align-end">
                        <div class="card-image">
                            <img src="src/img/background2.jpg" alt="">
                        </div>
                        <div class="card-content">
                            <h2>Hola mundo</h2>
                            <p>Aqui va información acerca de este apartado</p>
                        </div>
                    </div>
                    <div class="card text-align-center">
                        <div class="card-image">
                            <img src="src/img/background2.jpg" alt="">
                        </div>
                        <div class="card-content">
                            <h2>Hola mundo</h2>
                            <p>Aqui va información acerca de este apartado</p>
                        </div>
                    </div>
                  </div>
            </section>
            <section class="footerInformation">
                <div>
                    <img src="src/img/smartphone.png" alt="">
                </div>
                <div>
                    <h2>ENTRENA CUANDO Y DONDE QUIERAS CON ASTRAFIT</h2>
                    <a href="">EMPIEZA YA</a>
                </div>
                <div>
                    <img src="src/img/laptop-template2.png" alt="">
                </div>
            </section>
            <footer></footer>
        </main>
    </body>
    <script src =""></script>
</html>