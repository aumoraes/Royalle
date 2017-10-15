<div class="form-contato-mobile">

  <div class="tab">
    <p>
      Formulário de Contato
    </p>
  </div>
  <h1 class="info">
    Deixe uma mensagm que entraremos em contato, o que deseja?
  </h1>


  <div  id="ajax_contact_msg" class="col-sm-4 col-xs-12  text-xs-center">
  <span id="msg"></span>

  <button id="botao-home" class="ui-btn ui-corner-all">Continuar Navegando</button>
  </div>

  <form name="formContato" action="//royalleeventos.com.br/send-email.php" method="POST" class="formContato">

    <label for="nome">Nome *</label>
    <input type="text" data-clear-btn="true" name="nome">

    <label for="email">Email *</label>
    <input type="text" data-clear-btn="true" name="email">

    <label for="nome">Mensagem *</label>
    <textarea data-autogrow="false" name="mensagem" rows="100" data-clear-btn="true" class="textarea-contato" ></textarea>

    <input type="hidden" name="detalhes-do-form" value="Formulário Mobile"  />
    <div class="form-btn">
      <input type="submit" value="Enviar">
    </div>
  </form>





</div>
