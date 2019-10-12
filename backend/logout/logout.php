<?php 

    if(isset($_POST['submit'])){
        session_start();
        session_destroy();
        session_unset();

?>
    <div>
        <?php 

            echo 'you have been logged out of the server';
            // header('Location: ../../student_login.php');

        ?>
    </div>

<?php

    }

?>