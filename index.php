<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Createsoftw - Desarrollo de webs, video juegos, cursos y mas visitanos</title>
    <link rel="icon" href="./assets/img/logo/logo.png" type="image/png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

    <div id="loading-overlay">
        <div class="loader"></div>
        <p>Cargando web...</p>
    </div>

    <div id="main-content" class="skeleton">

        <header>
            <nav class="nav-container">
                <div class="logo-container">
                    <img src="./assets/img/logo/logo.png" alt="Logo Createsoftw" title="Desarrollo de webs, video juegos, cursos y mas visitanos" class="logo-img">
                    <span class="logo-text">createsoftw</span>
                </div>
                
                <ul class="nav-links">
                    <li><a href="#inicio">INICIO</a></li>
                    
                    <li class="dropdown">
                        <a href="#">Video juego shaiya <i class="fas fa-caret-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#" class="dropdown-item">VPS pre-armado</a></li>
                            <li><a href="#" class="dropdown-item">servidor dedicado</a></li>
                            <li><a href="#" class="dropdown-item">curso armado server shaiya</a></li>
                        </ul>
                    </li>
                    
                    <li class="dropdown">
                        <a href="#">Cursos <i class="fas fa-caret-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#" class="dropdown-item">html y css</a></li>
                            <li><a href="#" class="dropdown-item">programar en php</a></li>
                            <li><a href="#" class="dropdown-item">programar en JavaScript</a></li>
                            <li><a href="#" class="dropdown-item">Diseño en photoshop</a></li>
                            <li><a href="#" class="dropdown-item">Ofimatica (Microsoft Office y Libre Office)</a></li>
                            <li><a href="#" class="dropdown-item">Maqueteo Web con Inteligencia artificial (IA)</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#">Contratar servicio <i class="fas fa-caret-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#" class="dropdown-item">Crea tu web con nosotros</a></li>
                            <li><a href="#" class="dropdown-item">Solicita un presupuesto</a></li>
                            <li><a href="#" class="dropdown-item">Nuestro Portafolio Git</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#">servicios <i class="fas fa-caret-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#" class="dropdown-item">Servidores dedicados</a></li>
                            <li><a href="#" class="dropdown-item">VPS</a></li>
                            <li><a href="#" class="dropdown-item">Dominio + hosting</a></li>
                            <li><a href="#" class="dropdown-item">Dominio</a></li>
                            <li><a href="#" class="dropdown-item">hosting</a></li>
                            <li><a href="#" class="dropdown-item">Transfiere tu dominio</a></li>
                        </ul>
                    </li>

                    <li><a href="#login" class="auth-link">Iniciar sesión</a></li>
                    <li><a href="#register" class="auth-link">Registrarse</a></li>
                </ul>
                
                <button class="menu-toggle" aria-label="Abrir menú"><i class="fas fa-bars"></i></button>
            </nav>
        </header>

        <section id="inicio" class="hero-section">
            <img src="./assets/img/logo/pc.jpg" alt="Computadora y eslogan" title="Desarrollo de webs, video juegos, cursos y mas visitanos">
            <div class="hero-content">
                <h1>Somos Createsoftw, Somos tu mejor Opción. Al alcance de Tú bolsillo.</h1>
            </div>
        </section>

        <section class="domain-search-section">
            <h2>Reserva tu Dominio + Hosting por solo $90 USD</h2>
            <form class="domain-form">
                <div class="input-group">
                    <input type="text" name="domain_requi" placeholder="Escribe el nombre de dominio que deseas" required>
                    <button type="submit" name="botun_requi">Buscar Dominio</button>
                </div>
                
                <div class="domain-options">
                    <label>
                        <input type="radio" name="domain_type" value=".com" checked> .com
                    </label>
                    <label>
                        <input type="radio" name="domain_type" value=".net"> .net
                    </label>
                    <label>
                        <input type="radio" name="domain_type" value=".org"> .org
                    </label>
                    <label>
                        <input type="radio" name="domain_type" value=".io"> .io
                    </label>
                    <label>
                        <input type="radio" name="domain_type" value=".dev"> .dev
                    </label>
                </div>
            </form>
        </section>

        <section class="services-table-section">
			<h1>Servicios destacados</h1>
            <div class="service-table-container">
                <div class="service-card">
                    <h3>diseños gráficos</h3>
                    <img src="./assets/img/logo/placeholder_diseno.png" alt="Diseños Gráficos" title="Desarrollo de webs, video juegos, cursos y mas visitanos">
                </div>
                <div class="service-card">
                    <h3>cursos</h3>
                    <img src="./assets/img/logo/placeholder_cursos.png" alt="Cursos" title="Desarrollo de webs, video juegos, cursos y mas visitanos">
                </div>
                <div class="service-card">
                    <h3>desarrollos webs</h3>
                    <img src="./assets/img/logo/placeholder_desarrollo.png" alt="Desarrollos Webs" title="Desarrollo de webs, video juegos, cursos y mas visitanos">
                </div>
                <div class="service-card">
                    <h3>shaiya</h3>
                    <img src="./assets/img/logo/placeholder_shaiya.png" alt="Shaiya" title="Desarrollo de webs, video juegos, cursos y mas visitanos">
                </div>
            </div>
        </section>

        <section class="testimonials-section">
            <h2>Experiencias de Nuestros Clientes</h2>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="rating">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p>"El mejor curso de desarrollo web que he tomado. ¡Totalmente recomendado!"</p>
                    <cite>- **Alexa_Dev** (Estudiante de Programación)</cite>
                </div>
                <div class="testimonial-card">
                    <div class="rating">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p>"Nuestro servidor VPS para Shaiya funciona sin problemas. Excelente soporte técnico."</p>
                    <cite>- **GamerPro21** (Administrador de Servidor)</cite>
                </div>
                <div class="testimonial-card">
                    <div class="rating">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p>"El diseño gráfico para mi logo fue rápido y superó mis expectativas. ¡Cinco estrellas!"</p>
                    <cite>- **Javier M.** (Emprendedor)</cite>
                </div>
                <div class="testimonial-card">
                    <div class="rating">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p>"Contratamos el desarrollo de nuestra web y el resultado fue profesional y muy responsivo."</p>
                    <cite>- **Laura G.** (Gerente de Proyecto)</cite>
                </div>
            </div>
        </section>

        <section class="contact-section">
            <h2>Contáctanos y Comienza tu Proyecto</h2>
            <form class="contact-form">
                <label for="fullname">Nombre Completo:</label>
                <input type="text" id="fullname" name="fullname" required>
                
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="textdetails">Detalles de tu Solicitud:</label>
                <textarea id="textdetails" name="textdetails" rows="5" required></textarea>
                
                <button type="submit">Enviar Mensaje</button>
            </form>
        </section>

        <footer>
            <div class="footer-grid">
                <div class="footer-column">
                    <h4>Servicios Ofrecidos</h4>
                    <ul>
                        <li>Desarrollo Web</li>
                        <li>Hosting y Dominio</li>
                        <li>Servidores Dedicados/VPS</li>
                        <li>Diseño Gráfico</li>
                        <li>Cursos de Programación</li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h4>Datos de Contacto</h4>
                    <p><i class="fas fa-phone"></i> Teléfono 1: +584169256098</p>
                    <p><i class="fas fa-phone"></i> Teléfono 2: +584264188098</p>
                    <p><i class="fas fa-envelope"></i> Email: info@createsoftw.com</p>
                </div>
                <div class="footer-column">
                    <h4>Dirección y Redes</h4>
                    <p><i class="fas fa-map-marker-alt"></i> Dirección: [Caracas, Venezuela]</p>
                    <div class="social-links">
                        <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <p class="work-link"><a href="#">Trabaja con Nosotros</a></p>
                </div>
            </div>
            <div class="footer-bottom">
                &copy; 2025 Createsoftw. Todos los derechos reservados.
            </div>
        </footer>

        <div class="floating-buttons">
            <button id="chat-button" title="Chat Interno"><i class="fas fa-comment"></i></button>
            <a href="https://wa.me/584169256098" target="_blank" id="whatsapp-button" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
            <button id="scroll-to-top" title="Subir al inicio"><i class="fas fa-arrow-up"></i></button>
        </div>

        <div id="chat-modal" class="chat-modal">
            <div class="chat-content">
                <div class="chat-header">
                    <h4>Chat con Createsoftw</h4>
                    <button class="close-chat">&times;</button>
                </div>
                <div class="chat-body">
                    <div class="message received">Hola, soy Juan. ¿En qué puedo servirle?</div>
                    </div>
                <div class="chat-footer">
                    <input type="text" id="visitor-message" placeholder="Escribe tu mensaje...">
                    <button id="send-message"><i class="fas fa-paper-plane"></i></button>
                </div>
            </div>
        </div>

    </div> <script src="js/script.js"></script>
</body>
</html>