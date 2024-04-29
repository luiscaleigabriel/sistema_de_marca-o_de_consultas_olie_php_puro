<?= $this->layout('master') ?>

<section class="face">
    <div class="face--content wrapper">
        <div class="face--left">
            <h2>
                Your Path to Health and Healing 
                Begins Here: Excellence in Care,
                Compassion in Service.
            </h2>

            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod itaque accusantium, officiis ratione dolores inventore cumque cum quasi ad qui quo rerum debitis unde nemo sint harum iste nesciunt doloribus.
            </p>
            <div class="face--btns">
                <a href="" class="btn btn-see">Marcar consulta agora</a>
                <a href="" class="btn btn-consult">Ver localização</a>
            </div>
        </div>
        <div class="face--right">
            <img src="assets/images/undraw_Doctors_p6aq.png" alt="imagem" />
        </div>
    </div>
</section>

<section id="about" class="about">
    <div class="about--content wrapper">
        <div class="about-left">
        <img src="assets/images/undraw_doctor_kw5l.png" alt="imagem" />
        </div>
        <div class="about-right">
            <h2 class="about__title">Sobre nós</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut tempore consequatur illo nihil consequuntur obcaecati molestiae veniam incidunt doloribus sit quae nobis, expedita quaerat enim cum perspiciatis quas? Reprehenderit, perferendis?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis molestiae eius harum iste quo? Deleniti, architecto dolorem ducimus totam neque itaque at odit consectetur ad, consequuntur reprehenderit cumque adipisci. Officiis.</p>
            <div class="about--btn">
                <a href="#" class="btn btn-consult">Ler mais</a>
            </div>
        </div>
    </div>
</section>

<section id="services" class="services">
    <h2 class="services__title">Nossos especialistas</h2>
    <div class="services--content">
        <div class="especialista">
            <img src="assets/images/jeremy-alford-O13B7suRG4A-unsplash.jpg" alt="especialista" />
            <p>
                <span>Dr. Savannah Nguyem</span>
                <span>Psiquiatra</span>
            </p>
        </div>
        <div class="especialista">
            <img src="assets/images/austin-distel-7bMdiIqz_J4-unsplash.jpg" alt="especialista" />
            <p>
                <span>Dr. Laurindo Bala</span>
                <span>Médicina Interna</span>
            </p>
        </div>
        <div class="especialista">
            <img src="assets/images/bruno-rodrigues-279xIHymPYY-unsplash.jpg" alt="especialista" />
            <p>
                <span>Dr. Jhon Matheus</span>
                <span>Neurologista</span>
            </p>
        </div>
        <div class="especialista">
            <img src="assets/images/transferir1.jpeg" alt="especialista" />
            <p>
                <span>Dr. Jorge Mupembe</span>
                <span>Cardiologista</span>
            </p>
        </div>
        <div class="especialista">
            <img src="assets/images/usman-yousaf-pTrhfmj2jDA-unsplash.jpg" alt="especialista" />
            <p>
                <span>Dr. Virgilio Steward</span>
                <span>Pediatria</span>
            </p>
        </div>
        <div class="especialista">
            <img src="assets/images/transferir.jpeg" alt="especialista" />
            <p>
                <span>Dr. Donana Lemos</span>
                <span>Médicina Familiar</span>
            </p>
        </div>
    </div>
</section>

<section id="clientes" class="clientes">
    <?php

        use app\helpers\Session;

        if(Session::has('__flash')): ?>
            <?php if(Session::flashHas('success')): ?>
                <div class="success">
                    <?= Session::flashMessage('success') ?>
                </div>
            <?php endif; ?>
            <?php if(Session::flashHas('error')): ?>
                <div class="error">
                    <?= Session::flashMessage('error') ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    
    <h2 class="clientes__title">Oque nossos pacientes dizem?</h2>
    <div class="clientes--content">
        <?php foreach($feedbacks as $feedback): ?>
            <div class="clientes__box">
                <p>
                    <?= $feedback->mensagem ?>
                </p>
                <p class="clientes__name"><?= $feedback->nome ?></p>
            </div>
        <?php endforeach; ?>
        <div class="clientes--btn">
            <a href="#" class="btn btn-consult">Ver mais</a>
        </div>
    </div>
</section>

<section id="feedback" class="feedback">
    <div class="feedback--content wrapper">
        <div class="feedback--left">
            <img src="assets/images/patty-brito-Y-3Dt0us7e0-unsplash.jpg" alt="feedback" />
        </div>
        <div class="feedback--right">
            <form action="/feedback/paciente" method="POST">
                <h3 class="form__title">FEEDBACK</h3>
                <div class="form-group">
                    <input type="text" name="nome" id="nome" placeholder="Nome" required />
                </div>
                <div class="form-group">
                    <input type="email" name="email" id="email" placeholder="Email" required />
                </div>
                <div class="form-group">
                    <textarea name="mensagem" id="mensagem" cols="30" rows="10" placeholder="Mensagem" required ></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-see" type="submit">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</section>