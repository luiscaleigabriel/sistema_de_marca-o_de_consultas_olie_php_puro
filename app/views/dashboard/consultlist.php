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
<section class="list--content">
    <?php if(count($marcacoes) > 0): ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Endereço</th>
                    <th>Sexo</th>
                    <th>Data de Nascimento</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Data da consulta</th>
                    <th>Ato clínico</th>
                    <th>Tipo de consulta</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($marcacoes as $index => $marcacao):  ?>
                    <tr>
                        <td>
                            <?= $paciente[$index]->nome ?>
                        </td>
                        <td>
                            <?= $paciente[$index]->endereco ?>
                        </td>
                        <td>
                            <?= $paciente[$index]->sexo ?>
                        </td>
                        <td>
                            <?= $paciente[$index]->datanascimento ?>
                        </td>
                        <td>
                            <?= $paciente[$index]->email ?>
                        </td>
                        <td>
                            <?= $paciente[$index]->telefone ?>
                        </td>
                        <td>
                            <?= $marcacao->datamarcacao ?>
                        </td>
                        <td>
                            <?= $marcacao->atoclinico ?>
                        </td>
                        <td>
                            <?= $marcacao->tipoconsulta ?>
                        </td>
                        <td>
                            <a href="/consultlist/<?= $marcacao->id ?>/delete" title="Apagar">
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