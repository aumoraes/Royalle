
<div data-role="popup" id="popupDialog" data-overlay-theme="b" data-theme="b" style="max-width:400px;">
  <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
    <div id="contatos">
      <div data-role="header" data-theme="a">
      <h1>Contatos Royalle</h1>
      </div>
      <div role="main" class="ui-content" >
        <p class="ui-title">Escolha a melhor forma de entrar em contato conosco.</p>

        <p class="item">
          Telefone 1: <a href="tel:011980361745">(11) 98036-1745 - oi ( whatsapp )</a>
        </p>
        <p class="item">
          Telefone 2: <a href="tel:011980361745">(11) 96588-1509 - claro</a>
        </p>
        <p class="item">
          E-mail: <a href="mailto:contato@royalleeventos.com.br">contato@royalleeventos.com.br</a>
        </p>

        <button class="ui-btn ui-shadow ui-corner-all ui-icon-arrow-r ui-btn-icon-right" onclick="slideRightToLeft()">Formulário de Contato</button>


      </div>
    </div>
    <div id="formulario-contato">
      <div data-role="header" data-theme="a" >
        <h1 class="ui-icon-arrow-l ui-btn-icon-left" onclick="slideLeftToRight()">
          Formulário Royalle
        </h1>
      </div>
      <div class="form">
        <form name="formContato" action="//royalleeventos.com.br/send-email.php" method="POST" class="formContato">

          <label for="nome">Nome *</label>
          <input type="text" data-clear-btn="true" name="nome" required>

          <label for="email">Email *</label>
          <input type="text" data-clear-btn="true" name="email" required>

          <label for="nome">Mensagem *</label>
          <textarea data-autogrow="false" name="mensagem" rows="100" data-clear-btn="true" class="textarea-contato" required></textarea>

          <input type="hidden" name="detalhes-do-form" value="Formulário Mobile"  />
          <div class="">
            <input type="submit" value="Enviar">
          </div>
        </form>
      </div>
    </div>
</div>

<!-- <div id="modal-content" class="modal-contato">

  <div class="tab">
    <p>
      Contatos Royalle Eventos
    </p>
  </div>
  <h1 class="info">
    Há várias formas de entrar em contato conosco, escolha uma delas:
  </h1>

  <p class="item">
    (11) 96588-1509 - claro
    (11) 98036-1745 - oi
  </p>

  <a href="tel:011965881509">
    <button id="ligar-agora" class="ui-btn ui-corner-all">Ligar Agora</button>
  </a>
  <a href="https://api.whatsapp.com/send?phone=55011965881509" target="_blank">
    <button id="whatsapp" class="ui-btn ui-corner-all">Enviar mensagem no whats</button>
  </a>
  <br />
  <p class="item">
    E-mail: <a href="mailto:contato@royalleeventos.com.br">contato@royalleeventos.com.br</a>
  </p>

  <p class="item form-btn">
    Você também pode usar o formulário do site.
    <button class="ui-btn ui-corner-all" onclick="openModal('form-contato-mobile', true, 'modal-contato')">Usar formulário do site</button>
  </p>




</div> -->
