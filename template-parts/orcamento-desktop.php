<?php get_header(); ?>

<div class="orcamento  wrapper-desktop">

  <div  id="ajax_budget_msg">
  <span id="msg"></span>

  <button id="botao-home" class="ui-btn ui-corner-all">Ok</button>
  </div>
  <h1 class="page-title">Orçamento</h1>
  <div class="description">
    <p>
      Nós ajude a entender um pouco melhor o que você deseja para sua festa,
      entraremos em contato informando o valor e dando algumas sugestões.
    </p>
  </div>
  <br />
  <form name="formOrcamento" action="//royalleeventos.com.br/send-email-orcamento.php" method="POST" class="formOrcamento">

    <div class="form-itens">
      <label for="nome">Nome *</label>
      <input type="text" data-clear-btn="true" name="nome" id="nome" required>
    </div>

    <div class="form-itens">
    <label for="email">Email *</label>
    <input type="text" data-clear-btn="true" name="email" required>
    </div>

    <div class="form-itens">
    <label for="telefone">Tefone</label>
    <input type="number" name="telefone" pattern="[0-9]*" id="telefone" value="">
    </div>

    <div class="form-itens">
    <label for="date">Data aproximada da festa</label>
    <input type="date" name="data-festa" id="date" value="">
    </div>

    <div class="form-itens">
    <label for="endereco">Local da Festa ( CEP ou Nome da Rua )</label>
    <input type="text" data-clear-btn="true" name="endereco" id="endereco">
    </div>

    <div class="form-itens">
    <label for="qtd-adulto">Quantidade de Adultos:</label>
    <input type="range" name="qtd-adultos" id="qtd-adultos" value="0" min="0" max="200">
    </div>

    <div class="form-itens">
    <label for="qtd-criancas">Quantidade de Crianças:</label>
    <input type="range" name="qtd-criancas" id="qtd-criancas" value="0" min="0" max="200">
    </div>

    <div class="form-itens">
      <label for="select-choice-8" class="select">Opções de Lanches para sua festa:</label>
      <select name="lanches-para-festa[]" id="select-choice-8" multiple="multiple" data-native-menu="false" data-icon="grid" data-iconpos="left">
          <option>Selecione as opções:</option>
          <option value="xburger">Mini x-burger</option>
          <option value="xsalada">Mini x-salada</option>
          <option value="xbacon">Mini x-bacon</option>
          <option value="hotdog">Mini Hot Dog</option>

          <option value="carnelouca">Carne Louca</option>
          <option value="crepe">Crepe</option>
          <option value="algodaodoce">Algodão Doce</option>
          <option value="pipoca">Pipoca</option>
      </select>
    </div>

    <div class="form-itens">
      <label for="mensagem">Mensagem *</label>
      <textarea data-autogrow="false" name="mensagem" id="mensagem" rows="100" data-clear-btn="true" class="textarea-contato" required></textarea>
    </div>

    <input type="hidden" name="detalhes-do-form" value="Formulário Mobile Orcamento"  />

    <div class="form-itens">
      <input class="teste" type="submit" value="Enviar">
    </div>
  </form>

</div>


<?php get_footer();
