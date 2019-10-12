<?php

session_start();

?>
<div class="body">
<?php
    if(isset($_SESSION['id'])){
        echo 'i am working';
        echo $_SESSION['id'];
?>
    <?php  echo $_SESSION['picture']; ?>
        <img src="../backend/signup/<?php  echo $_SESSION['picture']; ?>" alt="it is working">
        <p><?php  echo $_SESSION['firstname']; ?></p>

        <form action="../backend/logout/logout.php" class="" method="POST">
            <button name="submit">Logout</button>
        </form>

    </div>

<?php 

}
?>

