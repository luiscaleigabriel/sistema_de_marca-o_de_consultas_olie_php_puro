<?= $this->layout('master') ?>
<?php
    use app\helpers\Session;
?>
<section class="contact">
    <?php if(Session::has('__flash')): ?>
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
    <div class="contact--content wrapper">
        <div class="contact--left">
            <img src="assets/images/jeremy-alford-O13B7suRG4A-unsplash.jpg" alt="doctor" />
        </div>
        <div class="contact--right">
            <h3 class="form__title">Entre em contacto conosco</h3>
            <form action="/contact" method="post">
                <div class="form-group">
                    <input type="text" name="nome" id="nome" placeholder="Seu nome" required />
                </div>
                <div class="form-group">
                    <input type="text" name="email" id="email" placeholder="Seu email" required />
                </div>
                <div class="form-group">
                    <input type="text" name="assunto" id="assunto" placeholder="Assunto" required />
                </div>
                <div class="form-group">
                    <textarea name="mensagem" id="mensagem" cols="30" rows="10" placeholder="Detalhes" required></textarea>
                </div>
                <div class="form-btn">
                    <button type="submit" class="btn btn-see">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</section>