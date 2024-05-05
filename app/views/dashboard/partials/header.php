<?php

use app\helpers\Session;
?>
<header class="header">
    <div class="header--c">
        <button id="toggle">
            <i class="fa-solid fa-bars"></i>
        </button>
        <div class="user--info">
            <h3 class="user__name"><?= Session::get('admin')['nome'] ?></h3>
            <i class="fa fa-user-circle"></i>
        </div>
    </div>
</header>