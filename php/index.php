<?php
include('../php/partials/navbar.php');
?>
<div>
    <h1>Dashboard</h1>
    <?php

    if (isset($_SESSION['login'])) {

        echo $_SESSION['login'];
        unset($_SESSION['login']);
    }

    ?>
</div>

<?php
include('../php/partials/footer.php');
?>