<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="assets/css/dash.css" />
    <link rel="stylesheet" href="assets/css/all.min.css" />
    <link rel="shortcut icon" href="assets/images/undraw_doctor_kw5l.png" type="image/x-icon" />
    <title>Clínica Girassol</title>
</head>
<body>

    <div class="content--main">
        <div class="content-l">
            <!-- navbar -->
            <section id="navbar" class="navbar">
                <?php $this->insert('dashboard/partials/nav') ?>
            </section>
            <!-- navbar -->
        </div>

        <div class="content-r">
            <!-- content -->
            <div class="content">
                <?= $this->section('content') ?>
            </div>

            <!-- footer -->
            <footer class="footer">
                <?php $this->insert('dashboard/partials/footer') ?>
            </footer>
        </div>
    </div>
    
    <script src="assets/js/dash.js"></script>
</body>
</html>