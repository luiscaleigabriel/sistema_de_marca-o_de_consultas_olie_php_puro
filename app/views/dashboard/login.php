<?php
    use app\helpers\Session;
?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="assets/css/login.css" />
    <link rel="stylesheet" href="assets/css/all.min.css" />
    <link rel="shortcut icon" href="assets/images/undraw_doctor_kw5l.png" type="image/x-icon" />
    <title>Clínica Girassol</title>
</head>
<body>

    <main class="main">
        <form action="/login" method="POST" class="form">
            <h2 class="form__title">Sejá bem vindo!</h2>
            <?php if(Session::has('__flash')): ?>
                <?php if(Session::flashHas('error')): ?>
                    <div class="error">
                        <?= Session::flashMessage('error') ?>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
            <div class="form--group">
                <label for="email">
                    <input type="email" name="email" id="email" placeholder="Email" />
                    <i class="fa fa-user"></i>
                </label>
            </div>
            <div class="form--group">
                <label for="senha">
                    <input type="password" name="senha" id="senha" placeholder="Senha" />
                    <i class="fa fa-key"></i>
                </label>
            </div>
            <div class="form-btn">
                <button type="submit">Entrar</button>
                <a href="/">Cancelar</a>
            </div>
        </form>
    </main>
</body>
</html>