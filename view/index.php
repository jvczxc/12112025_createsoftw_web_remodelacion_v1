<?php require_once 'view/layouts/headers.php'; ?>
<style>
    .margin {
        margin-top: 30px;
    }
</style>


        <section id="inicio" class="hero-section">
            <img src="view/img/logo/pc.jpg" alt="Computadora y eslogan" title="Desarrollo de webs, video juegos, cursos y mas visitanos">
            <div class="hero-content">
                <h1><?= const_0021 ?></h1>
            </div>
        </section>

            <?php require_once 'view/dominios/index.php'; ?>


        <section class="services-table-section">
			<h1><?= const_0019 ?></h1>
            <div class="service-table-container">
                <div class="service-card">
                    <h3><?= const_0006 ?></h3>
                    <img src="view/img/logo/placeholder_diseno.png" alt="Diseños Gráficos" title="<?= const_0110 ?>">
                </div>
                <div class="service-card">
                    <h3><?= const_0007 ?></h3>
                    <img src="view/img/logo/placeholder_cursos.png" alt="Cursos" title="<?= const_0111 ?>">
                </div>
                <div class="service-card">
                    <h3><?= const_0008 ?></h3>
                    <img src="view/img/logo/placeholder_desarrollo.png" alt="Desarrollos Webs" title="<?= const_0112 ?>">
                </div>
                <div class="service-card">
                    <h3><?= const_0009 ?></h3>
                    <img src="view/img/logo/placeholder_shaiya.png" alt="Shaiya" title="<?= const_0113 ?>">
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
                    <p>"<?= const_0108 ?>"</p>
                    <cite>- **Alexa_Dev** (<?= const_0109 ?>)</cite>
                </div>
                <div class="testimonial-card">
                    <div class="rating">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p>"<?= const_0107 ?>"</p>
                    <cite>- **GamerPro21** (<?= const_0106 ?>)</cite>
                </div>
                <div class="testimonial-card">
                    <div class="rating">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p>"<?= const_0100 ?>"</p>
                    <cite>- **Javier M.** (<?= const_0105 ?>)</cite>
                </div>
                <div class="testimonial-card">
                    <div class="rating">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p>"<?= const_0098 ?>"</p>
                    <cite>- **Laura G.** (<?= const_0099 ?>)</cite>
                </div>
            </div>
        </section>

        <section class="contact-section margin" id="contacts">
            <h2><?= const_0097 ?></h2>
            <form class="contact-form">
                <label for="fullname"><?= const_0101 ?></label>
                <input type="text" id="fullname" name="fullname" required>
                
                <label for="email"><?= const_0102 ?></label>
                <input type="email" id="email" name="email" required>
                
                <label for="textdetails"><?= const_0103 ?></label>
                <textarea id="textdetails" name="textdetails" rows="5" required></textarea>
                
                <button type="submit"><?= const_0104 ?></button>
            </form>
        </section>

 
<?php require_once 'view/layouts/footers.php'; ?>
 