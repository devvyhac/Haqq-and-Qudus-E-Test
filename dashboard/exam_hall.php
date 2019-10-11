<?php

session_start();

?>

<div class="body">
    <div class="welcome">
        <div class="alert">
            <?= $_SESSION['message']; ?>
        </div>
    </div>
    <span class="image"><img src="../backend/signup/<?= $_SESSION['picture'] ?>" alt="User profile Picture"></span>
    Welcome <span class="user">
        <?= $_SESSION['username'] ?>
    </span>
</div>