<?php require_once 'view/layouts/headers.php'; ?>


        <section id="inicio" class="hero-section">
            <img src="view/img/logo/pc.jpg" alt="Computadora y eslogan" title="Desarrollo de webs, video juegos, cursos y mas visitanos">
            <div class="hero-content">
                <h1><?= const_0021 ?></h1>
            </div>
        </section>

        <section class="domain-search-section">
            <h2><?= const_0011 ?></h2>
            <form class="domain-form">
                <div class="input-group">
                    <input type="text" name="domain_requi" placeholder="<?= const_0012 ?>" required>
                    <button type="submit" name="botun_requi"><?= const_0013 ?></button>
                </div>
                
                <div class="domain-options">
                    <label>
                        <input type="radio" name="domain_type" value=".com" checked> <?= const_0014 ?>
                    </label>
                    <label>
                        <input type="radio" name="domain_type" value=".net"> <?= const_0015 ?>
                    </label>
                    <label>
                        <input type="radio" name="domain_type" value=".org"> <?= const_0016 ?>
                    </label>
                    <label>
                        <input type="radio" name="domain_type" value=".io"> <?= const_0017 ?>
                    </label>
                    <label>
                        <input type="radio" name="domain_type" value=".dev"> <?= const_0018 ?>
                    </label>
                </div>
            </form>
        </section>

        <section class="services-table-section">
			<h1><?= const_0019 ?></h1>
            <div class="service-table-container">
                <div class="service-card">
                    <h3><?= const_0006 ?></h3>
                    <img src="view/img/logo/placeholder_diseno.png" alt="Diseños Gráficos" title="Desarrollo de webs, video juegos, cursos y mas visitanos">
                </div>
                <div class="service-card">
                    <h3><?= const_0007 ?></h3>
                    <img src="view/img/logo/placeholder_cursos.png" alt="Cursos" title="Desarrollo de webs, video juegos, cursos y mas visitanos">
                </div>
                <div class="service-card">
                    <h3><?= const_0008 ?></h3>
                    <img src="view/img/logo/placeholder_desarrollo.png" alt="Desarrollos Webs" title="Desarrollo de webs, video juegos, cursos y mas visitanos">
                </div>
                <div class="service-card">
                    <h3><?= const_0009 ?></h3>
                    <img src="view/img/logo/placeholder_shaiya.png" alt="Shaiya" title="Desarrollo de webs, video juegos, cursos y mas visitanos">
                </div>
            </div>
        </section>

        <section class="testimonials-section">
            <h2><?= const_0020 ?></h2>
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

 
<?php require_once 'view/layouts/footers.php'; ?>
 