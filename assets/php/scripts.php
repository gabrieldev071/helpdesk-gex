<?php

// Diretório onde estão os scripts JavaScript
$directory = './assets/js';

// Obtém uma lista de todos os arquivos JavaScript na pasta
$jsFiles = glob($directory . '*.js');

// Loop através dos arquivos e inclui o conteúdo
foreach ($jsFiles as $file) {
    include $file;
}

include './assets/php/scripts.php'

?>
