<?= $this->layout('dashboard/master') ?>

<?php $this->insert('dashboard/partials/header') ?>


<div class="dash">
    <div class="card">
        <h3 class="card__title"><i class="fa fa-list"></i> Consultas marcadas</h3>
        <span class="card__total">Total <?= count($consults) ?></span>
    </div>
    <div class="card">
        <h3 class="card__title"><i class="fa fa-users"></i> Médicos</h3>
        <span class="card__total">Total <?= count($doctors) ?></span>
    </div>
    <div class="card">
        <h3 class="card__title"><i class="fa fa-users"></i> Usuários</h3>
        <span class="card__total">Total <?= count($users) ?></span>
    </div>
</div>