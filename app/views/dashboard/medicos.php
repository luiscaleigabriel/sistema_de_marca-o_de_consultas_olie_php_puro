<?= $this->layout('dashboard/master') ?>

<?php

use app\helpers\Session;

$this->insert('dashboard/partials/header') ?>

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

<div class="add">
    <a class="btn" href="/doctorAdd">Cadastrar médico</a>
</div>

<section class="list--content">
    <?php if(count($doctors) > 0): ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Especialidade</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($doctors as $doctor):  ?>
                    <tr>
                        <td>
                            <?= $doctor->nome ?>
                        </td>
                        <td>
                            <?= $doctor->email ?>
                        </td>
                        <td>
                            <?= $doctor->especialidade ?>
                        </td>
                        <td>
                            <a href="/doctor/delete/<?= $doctor->id ?>" title="Apagar">
                                <i class="fa fa-delete-left"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <h3>Nenhuma consulta marcada!</h3>
    <?php endif; ?>
</section>