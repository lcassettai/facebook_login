<?php
    session_start();

    if (isset($_POST['userID'])) {
        $_SESSION['userID'] = $_POST['userID'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['name'] = $_POST['nombre'];
        $_SESSION['apellido'] = $_POST['apellido'];
        $_SESSION['genero'] = $_POST['genero'];
        $_SESSION['accessToken'] = $_POST['accessToken'];

        exit("success");
    }
?>xwxs
