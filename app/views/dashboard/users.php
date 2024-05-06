<?= $this->layout('dashboard/master') ?>

<?= $this->insert('dashboard/partials/header') ?>

<div class="add">
    <a class="btn" href="/useradd">Cadastrar novo Usuario</a>
</div>

<section class="list--content">
    <?php

use app\helpers\Session;

if(count($users) > 0): ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($users as $user):  ?>
                    <tr>
                        <td>
                            <?= $user->nome ?>
                        </td>
                        <td>
                            <?= $user->email ?>
                        </td>
                        <td>
                            <?php if(!($user->id == Session::get('admin')['id'])): ?>
                                <a href="/user/delete/<?= $user->id ?>" title="Apagar">
                                <i class="fa fa-delete-left"></i>
                                </a>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <h3>Nenhuma Usuário encontrado!</h3>
    <?php endif; ?>
</section>