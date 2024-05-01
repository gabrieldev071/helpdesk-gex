<?php

switch (@$_REQUEST["page"]) {
    case "novo":
        include("chamado.php");
        break;
    case "salvar":
        include("index.php");
        break;
    case "chamado":
        include("chamado.php");
        break;
    default:
        print "";
}
?>