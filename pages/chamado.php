<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php

?>
</head>
<body>

<div class="container baseContainer">
<h2 class='cadastro-title'>ABERTURA DE NOVO CHAMADO</h2>
<form action="../assets/php/chamadoscript.php" method="post" enctype="multipart/form-data"  onsubmit="return validarFormulario()" class="needs-validation">

    <input type="hidden" name="acao" value="cadastrar">

            <div class="wrap-input">
                <input type="text" class="input" id="nome_chamado" name="nome" value="" required>
                <span class="focus-input" data-placeholder="Nome completo"></span>
            </div>

            <div class="wrap-input">
                <input type="email" class="input" id="email_chamado" name="email" required value="">
                <span class="focus-input" data-placeholder="Email: exemplo@inss.gov.br"></span> 
            </div>

            <div class="wrap-input">
                <input type="tel" class="input" id="telefone_chamado" name="telefone" pattern="(\+55)?(?:(\(\d{2,5}\)|\d{2,5})?((\d{8,9})|(\d{4,5}-\d{4})))" maxlength="20" minlength="10" title="Digite seu número corretamente. Não adicione espaços." required value="">
                <span class="focus-input" data-placeholder="Telefone: (99) 99999-8888"></span>
            </div>

            <div class="wrap-input">
            <input type="text" class="input" id="matricula_chamado" name="matricula" pattern="[0-9]*" inputmode="numeric" required value="">
                <span class="focus-input" data-placeholder="Matrícula: apenas números"></span>
            </div>

            <div class="wrap-input">
                <select class="input" id="aps_chamado" name="aps" required value="">
                    <option value="">Selecione sua APS</option>
                    <option value="GEX">Campina G. GEX</option>
                    <option value="DINA">Campina G. APS - Dinamérica</option>
                    <option value="CATOLE">Campina G. APS - Catolé</option>
                    <option value="OUTROS">Outros</option>
                </select>
            </div>

            <div class="wrap-input">
                <select class="input" id="categoria_chamado" name="categoria" required value="">
                    <option value="">Selecione uma categoria</option>
                    <option value="Problema de Hardware">Problema de Hardwares</option>
                    <option value="Problema de Software">Problema de Softwares</option>
                    <option value="Problema de Rede">Problema de Rede / Acesso</option>
                    <option value="SABI/PRISMA/TOKEN">SABI, PRISMA, TOKEN</option>
                    <option value="Outros">Outros</option>
                </select>
            </div>

            <div class="wrap-input">
                <textarea class="input" id="descricao_chamado" name="descricao" rows="5" required value=""></textarea>
                <span class="focus-input" data-placeholder="Descrição do problema..."></span>
            </div>

            <div class="wrap-input">
                <label for="anexo">Anexar imagem ou print:</label>
                <br></br>
                <input type="file" class="form-control-file input" id="anexo" name="fotoPrint" accept="image/*" required>
            </div>

            <button type="submit" class="btn btn-success">Abrir Chamado</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        </form>
</form>
</div>

<script src="../assets/js/inputClass.js"></script>
</body>
</html>

