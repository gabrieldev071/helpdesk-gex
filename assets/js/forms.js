function validarFormulario() {
  var localizacaoSelecionada = document.getElementById("localizacao").value;
  if (localizacaoSelecionada === "") {
    alert("Por favor, selecione uma localização válida.");
    return false; // Impede o envio do formulário
  }
  return true; // Permite o envio do formulário
}

// pegar dados do PHP para JS
function pegarDados(id, nome) {

 
  document.getElementById("nome_pessoa").innerHTML = nome;   /* nome da pessoa no elemento */
  
  document.getElementById("nome_pessoa_exclusao").value = nome; /* ID oculto */
  document.getElementById("cod_pessoa").value = id; /* ID oculto */
  
}

// Função para carregar o formulário dentro do modal
function carregarFormulario() {
  $.ajax({
    url: "chamado.php", // Arquivo PHP que contém o formulário
    type: "GET",
    success: function (response) {
      $("#modalFormulario .modal-body").html(response); // Carrega o conteúdo do formulário dentro do modal
    },
    error: function (xhr, status, error) {
      console.error("Erro ao carregar formulário:", error); // Exibe um erro, se ocorrer
    },
  });
}

// Chama a função para carregar o formulário assim que o modal é exibido
$("#modalFormulario").on("show.bs.modal", function (e) {
  carregarFormulario();
});

function openModalUpdate(
  cod_pessoa,
  nome,
  email,
  matricula,
  aps,
  categoria,
  descricao
) {
  var modal = new bootstrap.Modal(document.getElementById("modalAtualizacao"));
  modal.show();

  // Simular uma requisição AJAX
  var detalhesChamado = {
    id: cod_pessoa,
    nome: nome,
    email: email,
    matricula: matricula,
    aps: aps,
    categoria: categoria,
    descricao: descricao,
    // Outros detalhes...
  };

  // Preencher os campos do formulário com os detalhes do chamado
  preencherFormulario(detalhesChamado);
}

// Função para preencher os campos do formulário com os detalhes do chamado
function preencherFormulario(detalhesChamado) {
  // Construir o HTML do formulário de atualização
  var formularioHTML = `

    <div class="container baseContainer">
        <form action="../assets/php/updatechamado-script.php" method="POST" onsubmit="return validarFormulario()" class="needs-validation">

            <input type="hidden" name="acao" value="cadastrar">
            <input type="hidden" name="id_chamado" value="${detalhesChamado.id}">
            <!-- Campos do formulário preenchidos com os detalhes do chamado -->

            <div class="wrap-input">
            <input type="text" class="input has-val" id="nome_update" name="nome" value="${detalhesChamado.nome}" required>
            <span class="focus-input" data-placeholder="Nome completo"></span>
            </div>

            <div class="wrap-input">
                <input type="email" class="input has-val" id="email_update" name="email" required value="${detalhesChamado.email}">
                <span class="focus-input" data-placeholder="Email: exemplo@inss.gov.br"></span>
            </div>

            <div class="wrap-input">
            <input type="text" class="input has-val" id="matricula_update" name="matricula" required value="${detalhesChamado.matricula}">
            <span class="focus-input" data-placeholder="Matrícula"></span>
            </div>

            <div class="wrap-input">
                <select class="input has-val" id="aps_update" name="aps" required value="">
                    <option value="">Selecione a APS</option>
                    <option value="GEX">Campina G. GEX</option>
                    <option value="DINA">Campina G. APS - Dinamérica</option>
                    <option value="CATOLE">Campina G. APS - Catolé</option>
                    <option value="OUTROS">Outros</option>
                </select>
            </div>

            <div class="wrap-input">
                <select class="input has-val" id="categoria_update" name="categoria" required value="">
                    <option value="">Selecione uma categoria</option>
                    <option value="Problema de Hardware">Problema de Hardwares</option>
                    <option value="Problema de Software">Problema de Softwares</option>
                    <option value="Problema de Rede">Problema de Rede / Acesso</option>
                    <option value="SABI/PRIMA/TOKEN">SABI, PRISMA, TOKEN</option>
                    <option value="Outros">Outros</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Salvar</button>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Não</button>
        </form>
        </div>
    `;

  // Exibir o formulário dentro da div desejada
  /*  document.getElementById('formularioAtualizacao').innerHTML = formularioHTML; */

  document.getElementById("formularioAtualizacao").innerHTML = formularioHTML;
}

