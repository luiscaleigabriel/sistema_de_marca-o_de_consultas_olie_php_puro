<?= $this->layout('master') ?>
<?php
    use app\helpers\Session;
?>

<section class="consult">
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
    <div class="consult--content">
        <form action="" method="post">
            <h2 class="form__title">Formulário de Consulta</h2>
            <div class="form--filds">
                <div class="form-group">
                    <label for="nome">Nome Completo</label>
                    <input type="text" name="nome" id="nome" />
                </div>
                <div class="form-group">
                    <label for="endereco">Endereço</label>
                    <textarea name="endereco" id="endereco" cols="30" ></textarea>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" />
                </div>
                <div class="form-group">
                    <label for="datamarcacao">Data da Consulta</label>
                    <input type="datetime-local" name="datamarcacao" id="datamarcacao" />
                </div>
                <div class="form-group">
                    <label for="sexo">Sexo</label>
                    <select name="sexo" id="sexo">
                        <option value="M">Masculino</option>
                        <option value="F">Femenino</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="ato">Ato-Clínico</label>
                    <select name="ato" id="ato">
                        <option value="Consulta">Consulta</option>
                        <option value="Exames">Exames</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="datanascimento">Data de nascimento</label>
                    <input type="date" name="datanascimento" id="datanascimento" />
                </div>
                <div class="form-group">
                    <label for="tipoconsulta">Consulta ou exame</label>
                    <select name="tipoconsulta" id="tipoconsulta">
                        <option value="Pré-Natal">Pré-Natal</option>
                        <option value="Cardiologia">Cardiologia</option>
                        <option value="Oftalmologia">Oftalmologia</option>
                        <option value="Clinica Geral">Clinica Geral</option>
                        <option value="Medicina Estética">Medicina Estética</option>
                        <option value="Controlo">Controlo</option>
                        <option value="Outro">Outro</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="telefone">Nº Telefone</label>
                    <input type="number" name="telefone" id="telefone" />
                </div>
                <div class="form-btns">
                    <button type="submit" class="btn btn-see">Cadastrar</button>
                    <a href="/" class="btn btn-consult">Cancelar</a>
                </div>
            </div>
        </form>
    </div>
</section>