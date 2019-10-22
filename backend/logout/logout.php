<?php 

    if(isset($_POST['submit'])){
        session_start();
        session_destroy();
        session_unset();

?>
    <div>
        <?php 
            header('Location: ../../index.php');
        ?>
    </div>

<?php

    }

?>