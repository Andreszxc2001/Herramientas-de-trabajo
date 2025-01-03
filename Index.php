<?php
// Usuario y contraseña
$usuario = "arnaldo";
$contraseña = "2001";

if (isset($_SERVER['PHP_AUTH_USER']) && $_SERVER['PHP_AUTH_USER'] === $usuario && $_SERVER['PHP_AUTH_PW'] === $contraseña) {
    // Si las credenciales son correctas, mostramos la página
    // Puedes agregar un mensaje de bienvenida o algo similar aquí
} else {
    // Si no son correctas, o si el usuario no está autenticado, forzamos la autenticación
    header('WWW-Authenticate: Basic realm="Zona Protegida"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Acceso denegado.';
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Cargar iconos de FontAwesome -->
     <script src="https://kit.fontawesome.com/3140323153.js" crossorigin="anonymous"></script>

    <!-- Cargar CSS personalizado -->
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/styles_global.css">

    <!-- Cargar favicons-->
    <link rel="apple-touch-icon" sizes="57x57" href="/assets/favicons//apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/assets/favicons//apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/favicons//apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/favicons//apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/favicons//apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/assets/favicons//apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/assets/favicons//apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/assets/favicons//apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicons//apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/assets/favicons//android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicons//favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/assets/favicons//favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicons//favicon-16x16.png">

    <title>HERRAMIENTAS DE TRABAJO</title>
</head>
<body>

<!-- ===================== HEADER ===================== -->

<header>
    <!-- Logo -->
    <a href="/index.php">
        <img src="/assets/Logo_principal/logo_transparente.png" alt="Logo">
    </a>
    <!-- Navegación -->
    <nav>
        <ul>
            <li><a href="/index.html"><i class="fa-solid fa-house"></i> Inicio</a></li>
            <li><a href="#seccion-1"><i class="fa-solid fa-scissors"></i> Edición de imágenes</a></li>
            <li><a href="#seccion-2"><i class="fa-solid fa-server"></i> Servidores web</a></li>
            <li><a href="#seccion-3"><i class="fa-brands fa-github"></i> Repositorio</a></li>
            <li><a href="#seccion-4"><i class="fa-solid fa-microchip"></i> Inteligencia artificial</a></li>
            <li><a href="#seccion-5"><i class="fa-solid fa-book"></i> Frameworks y librerias</a></li>
            <li><a href="/php/logout.php"><i class="fas fa-sign-out-alt"></i> Cerrar sesion</a></li>

        </ul>
    </nav>
</header>


<!-- ===================== MAIN CONTENT ===================== -->

    <main>

        <h1>HERRAMIENTAS DE TRABAJO</h1>

        <!-- Seccion 1 -->
        

        <section id="seccion-1">
            <h2>1.Edición y manejo de imágenes</h2>
        <div class="seccion">
            <div class="tools">
                <div class="content">
                    <H3>LOGOMASTER IA</H3>
                    <a href="https://logomaster.ai/?gad_source=1" target="_blank"><img src="/assets/logo_1/image-1.jpg" alt="Logo"></a>
                    <a href="https://logomaster.ai/?gad_source=1" target="_blank">Link</a></a>
                    <h4>Correo</h4>
                    <P>arnaldozxc@gmail.com</P>
                    <h4>Contraseña</h4>
                    <P>20010926</P>
                </div>
            </div>

            <div class="tools">
                <div class="content">
                    <H3>CANVA</H3>
                    <a href="https://www.canva.com" target="_blank"><img src="/assets/logo_1/image-2.jpg" alt="Logo"></a>
                    <a href="https://www.canva.com" target="_blank">Link</a></a>
                    <h4>Correo</h4>
                    <P>arnaldozxc@gmail.com</P>
                    <h4>Contraseña</h4>
                    <P>20010926</P>
                </div>
            </div>

            <div class="tools">
                <div class="content">
                    <H3>Remove IA</H3>
                    <a href="https://removal.ai/es/" target="_blank"><img src="/assets/logo_1/image-3.png" alt="Logo"></a>
                    <a href="https://removal.ai/es/" target="_blank">Link</a></a>
                    <h4>Correo</h4>
                    <P>arnaldozxc@gmail.com</P>
                    <h4>Contraseña</h4>
                    <P>20010926</P>
                </div>
            </div>

            <div class="tools">
                <div class="content">
                    <H3>I LOVE IMG</H3>
                    <a href="https://www.iloveimg.com/es" target="_blank"><img src="/assets/logo_1/image-4.jpg" alt="Logo"></a>
                    <a href="https://www.iloveimg.com/es" target="_blank">Link</a></a>
                    <h4>Correo</h4>
                    <P>arnaldozxc@gmail.com</P>
                    <h4>Contraseña</h4>
                    <P>20010926</P>
                </div>
            </div>

            <div class="tools">
                <div class="content">
                    <H3>PIXELCUT</H3>
                    <a href="https://www.pixelcut.ai/es" target="_blank"><img src="/assets/logo_1/image-5.jpg" alt="Logo"></a>
                    <a href="https://www.pixelcut.ai/es" target="_blank">Link</a></a>
                    <h4>Correo</h4>
                    <P>arnaldozxc@gmail.com</P>
                    <h4>Contraseña</h4>
                    <P>20010926</P>
                </div>
            </div>

            <div class="tools">
                <div class="content">
                    <H3>Favicon & App Icon Generator</H3>
                    <a href="https://www.favicon-generator.org/" target="_blank"><img src="/assets/logo_1/image-6.jpg" alt="Logo"></a>
                    <a href="https://www.favicon-generator.org/" target="_blank">Link</a></a>
                    <h4>Descripcion</h4>
                    <p>-Para creacion de favicons ajustados con codigo html y otros servicios.</p>
                </div>
            </div>
        </div>
        </section>

        
        <!-- Seccion 2 -->

        <section id="seccion-2">
            <h2>2.Servidores gratuitos y de paga</h2>

            <h2>2.1. Servidores de paga</h2>
            <div class="seccion">
            <div class="tools">
                <div class="content">
                    <H3>HOSTINGER</H3>
                    <a href="https://www.hostinger.co/?gad_source=1" target="_blank"><img src="/assets/logo_2/image-1.png" alt="Logo"></a>
                    <a href="https://www.hostinger.co/?gad_source=1" target="_blank">Link</a></a>
                    <h4>Correo</h4>
                    <P>arnaldozxc@gmail.com</P>
                    <h4>Contraseña</h4>
                    <P>1118858778</P>
                </div>
            </div>

            <div class="tools">
                <div class="content">
                    <H3>AMAZON WEB SERVICES (AWS)</H3>
                    <a href="https://aws.amazon.com/" target="_blank"><img src="/assets/logo_2/image-2.jpg" alt="Logo"></a>
                    <a href="https://aws.amazon.com/" target="_blank">Link</a></a>
                    <h4>ID</h4>
                    <p> 820242928082</p>
                    <h4>Usuario IAM</h4>
                    <P>Andrespushaina</P>
                    <h4>Contraseña</h4>
                    <P>20010926An*</P>
                    <h4>Descripcion</h4>
                </div>
            </div>

            <div class="tools">
                <div class="content">
                    <h3>GoDaddy-hosting</h3>
                    <a href="https://www.godaddy.com/" target="_blank"><img src="/assets/logo_2/image-3.png" alt="Logo"></a>
                    <a href="https://www.godaddy.com/" target="_blank">Link</a></a>
                    <h4>Correo</h4>
                    <P>arnaldozxc@gmail.com</P>
                    <h4>Contraseña</h4>
                    <P>20010926</P>
                    <h4>Descripcion</h4>
                </div>
            </div>
        </div>

        <h2>2.2. Servidores de gratuitos</h2>
        <div class="seccion">
            <div class="tools">
                <div class="content">
                    <h3>INFINITYFREE</h3>
                    <a href="https://www.infinityfree.com/" target="_blank"><img src="/assets/logo_2/image-4.png" alt="Logo"></a>
                    <a href="https://www.infinityfree.com/" target="_blank">Link</a></a>
                    <h4>Correo</h4>
                    <P>arnaldozxc@gmail.com</P>
                    <h4>Contraseña</h4>
                    <P>20010926</P>
                </div>
            </div>

            <div class="tools">
                <div class="content">
                    <h3>Railway App</h3>
                    <a href="https://railway.app/" target="_blank"><img src="/assets/logo_2/image-5.png" alt="Logo"></a>
                    <a href="https://railway.app/" target="_blank">Link</a></a>
                    <h4>Correo</h4>
                    <P>arnaldozxc@gmail.com</P>
                    <h4>Contraseña</h4>
                    <P>20010926</P>
                </div>
            </div>
        </section>

        <section id="seccion-3">

            <h2>3.Repositorios</h2>

            <div class="tools">
                <div class="content">
                    <h3>GitHub</h3>
                    <a href="https://github.com/" target="_blank"><img src="/assets/logo_3/image-1.png" alt="Logo"></a>
                    <a href="https://github.com/" target="_blank">Link</a></a>
                    <h4>Correo</h4>
                    <P>arnaldozxc@gmail.com</P>
                    <h4>Contraseña</h4>
                    <P>1118858778An*</P>
                    <h4>Descripcion</h4>
                    <p>-Para almacenamiento de codigo, trabajo remoto y alojamiento de datos.</p>
                </div>
            </div>
        </div>
        </section>

        <!-- Seccion 4 -->

        <section id="seccion-4">

            <h2>4.IA de texto Y y correcion de codigo</h2>
            <div class="seccion">
            <div class="tools">
                <div class="content">
                    <h3>Chat GPT</h3>
                    <a href="https://chatgpt.com/" target="_blank"><img src="/assets/logo_4/image-1.png" alt="Logo"></a>
                    <a href="https://chatgpt.com/" target="_blank">Link</a></a>
                    <h4>Correo</h4>
                    <P>arnaldozxc@gmail.com</P>
                    <h4>Contraseña</h4>
                    <P>20010926</P>
                </div>
            </div>

            <div class="tools">
                <div class="content">
                    <h3>CLAUDE .IA</h3>
                    <a href="https://claude.ai/" target="_blank"><img src="/assets/logo_4/image-2.png" alt="Logo"></a>
                    <a href="https://claude.ai/" target="_blank">Link</a></a>
                    <h4>Correo</h4>
                    <P>arnaldozxc@gmail.com</P>
                    <h4>Contraseña</h4>
                    <P>20010926</P>
                </div>
            </div>

            <div class="tools">
                <div class="content">
                    <h3>VALIDADOR W3C</h3>
                    <a href="https://validator.w3.org/" target="_blank"><img src="/assets/logo_4/image-3.png" alt="Logo"></a>
                    <a href="https://validator.w3.org/" target="_blank">Link</a></a>
                    <h4>Descripcion</h4>
                    <p>-Para consultas sobre la semnatica del html y css.</p>
                </div>
            </div>
            </div>
        </section>

        <!-- Seccion 5 -->

        <section id="seccion-5">

            <h2>5.FRAMEWORKS Y LIBRERIAS DE CODIGO E ICONO(Front-end)</h2>

            <h2>2.1. Frameworks</h2>
            <div class="seccion">
            <div class="tools">
                <div class="content">
                    <h3>Tailwind CSS</h3>
                    <a href="https://tailwindcss.com/blog/tailwindcss-v4-beta" target="_blank"><img src="/assets/logo_5/image-1.jpg" alt="Logo"></a>
                    <a href="https://tailwindcss.com/blog/tailwindcss-v4-beta" target="_blank">Link</a></a>
                    <h4>Descripcion</h4>
                    <p>-Framework para estilos css ya que usa tecnologíasweb estándar en su version beta.</p>
                </div>
            </div>

            <div class="tools">
                <div class="content">
                    <h3>Ionic</h3>
                    <a href="https://ionicframework.com/" target="_blank"><img src="/assets/logo_5/image-2.png" alt="Logo"></a>
                    <a href="https://ionicframework.com/" target="_blank">Link</a></a>
                    <h4>Correo</h4>
                    <P>arnaldozxc@gmail.com</P>
                    <h4>Contraseña</h4>
                    <P>1118858778An*</P>
                </div>
            </div>

            <div class="tools">
                <div class="content">
                    <h3>React.js</h3>
                    <a href="https://react.dev/" target="_blank"><img src="/assets/logo_5/image-3.png" alt="Logo"></a>
                    <a href="https://react.dev/" target="_blank">Link</a></a>
                    <h4>Correo</h4>
                    <P>arnaldozxc@gmail.com</P>
                    <h4>Contraseña</h4>
                    <P>20010926</P>
                </div>
            </div>
        </div>

            <h2>2.2. Librerias de codigo</h2>
            <div class="seccion">
            <div class="tools">
                <div class="content">
                    <h3>Bootstrap</h3>
                    <a href="https://getbootstrap.com/" target="_blank"><img src="/assets/logo_5/image-4.jpg" alt="Logo"></a>
                    <a href="https://getbootstrap.com/" target="_blank">Link</a></a>
                    <h4>Descripcion</h4>
                    <p>-Biblioteca que combina CSS, JavaScript y HTML
                        para facilitar el diseño de sitios web y aplicaciones
                        responsivas.</p>
                </div>
            </div>

            <div class="tools">
                <div class="content">
                    <h3>GreenSock (GSAP)</h3>
                    <a href="https://gsap.com/" target="_blank"><img src="/assets/logo_5/image-5.png" alt="Logo"></a>
                    <a href="https://gsap.com/" target="_blank">Link</a></a>
                    <h4>Usuario</h4>
                    <P>ARNALDOZXC</P>
                    <h4>Contraseña</h4>
                    <P>20010926aN*</P>
                </div>
            </div>
        </div>
            <h2>2.3. Librerias de icono</h2>
            <div class="seccion">
            <div class="tools">
                <div class="content">
                    <h3>Google fonts</h3>
                    <a href="https://fonts.google.com/icons" target="_blank"><img src="/assets/logo_5/image-6.png" alt="Logo"></a>
                    <a href="https://fonts.google.com/icons" target="_blank">Link</a></a>
                    <h4>Descripcion</h4>
                    <p>-Íconos de Google basados en Material Design.</p>
                </div>
            </div>

            <div class="tools">
                <div class="content">
                    <h3>Fontawesome</h3>
                    <a href="https://fontawesome.com/" target="_blank"><img src="/assets/logo_5/image-7.png" alt="Logo"></a>
                    <a href="https://fontawesome.com/" target="_blank">Link</a></a>
                    <h4>Correo</h4>
                    <P>arnaldozxc@gmail.com</P>
                    <h4>Contraseña</h4>
                    <P>20010926</P>
                </div>
            </div>
        </div>
        </section>
    </main>


    <!-- ===================== FOOTER ===================== -->

    <footer>
        <div class="credits">
            <!-- Créditos de desarrollo -->
            <p class="By"><strong>Developed by</strong> | Arnaldo Pushaina</p>
            
            <!-- Derechos reservados -->
            <p class="text">©2024 | Todos los derechos reservados</p>
        </div>
    </footer>
</body>
</html>