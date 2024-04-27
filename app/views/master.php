<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Sistema de marcação de consultas online" />
    <meta name="keywords" content="marcação de consultas, online, sitema, clíniica" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/all.min.css" />
    <link rel="shortcut icon" href="assets/images/undraw_doctor_kw5l.png" type="image/x-icon">
    <?= $this->section('style') ?>
    <title>CLínica Girassol</title>
</head>
<body>

    <!-- header -->
    <header class="header">
        <?php $this->insert('sections/nav') ?>
    </header> 


    <!-- content -->
    <div class="content">
        <?= $this->section('content') ?>
    </div>

    

</body>
</html>

<?php
/*
<!-- footer -->
<footer class="footer">
    <?php $this->insert('sections/footer') ?>
</footer>

<!-- script js -->
<script src="assets/js/script.js"></script>
<?= $this->section('js') ?> */ ?>