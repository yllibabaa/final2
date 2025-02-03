<?php
    include_once('sessions.php');

    $_SESSION['userId'] = null;

    header('Location:logIn.php');

?>