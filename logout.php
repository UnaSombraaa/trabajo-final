<?php

    if (isset($_COOKIE['sesion'])) {
        unset($_COOKIE['sesion']); // vaciar en el servidor
        setcookie('sesion', null, -1, '/'); // vaciar en el cliente
    }
    header('Location: header.php');
?>