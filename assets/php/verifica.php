<?php

require '../conexaoPDO.php';

if (isset($_SESSION['iduser']) && !empty($_SESSION['iduser'])) {

    require_once 'Usuario.Class.php';

    $u = new Usuario();
    $listLogged = $u->logged($_SESSION['iduser']);

    // Dividindo o nome completo em partes (nome e sobrenome)
    $nomeCompleto = explode(' ', $listLogged['nome']);

    // Extraindo apenas o primeiro nome e o sobrenome
    $nomeUser = $nomeCompleto[0] . ' ' . end($nomeCompleto); // Primeiro nome + último elemento (sobrenome)

} else {
    header('Location: ./index.php');
}
