<?php
session_start();
// Verifica se o usuário está autenticado
if (isset($_SESSION['login'])) {
    $user = $_SESSION['login'];
} else {
    session_destroy();
    header("location: ../index.php?=msg=expulso");
}
?>
