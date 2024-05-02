<?php

// Diretório onde estão os scripts JavaScript
$js_folder = '../assets/js/';

// Obtém uma lista de todos os arquivos JavaScript na pasta
$js_files = glob($js_folder . '/*.js');

// Loop através dos arquivos e inclui o conteúdo
foreach ($js_files as $file) {
    require_once($file);
}

?>
