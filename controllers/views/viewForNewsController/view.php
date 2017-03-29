<h1>Новости сегодня</h1>
<?php

foreach ($list as $it) : ?>
    <?php
    $it->printInfo();
    ?>
<?php endforeach; ?>
