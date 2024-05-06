<?= $this->layout('dashboard/master') ?>

<?= $this->insert('dashboard/partials/header') ?>

<form action="/usercreate" method="POST">
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" required />
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required />
    </div>
    <div class="form-group">
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" required />
    </div>
    <div class="form-btn">
        <button type="submit">Cadastrar</button>
    </div>
</form>