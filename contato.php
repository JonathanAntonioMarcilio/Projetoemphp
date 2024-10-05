<?php
  include __DIR__ . "/includes/header.php";
?>
<main class="container">
  <div>
    <h1>Contato</h1>
    <p>Contate a nossa empresa</p>
  </div>
  <form action="" method="post" id="form">
    <div>
      <label for="form_name">Digite seu nome:</label>
      <input
        type="text"
        id="form_name"
        placeholder="Nome Completo"
        name="name"
      />
    </div>
    <div>
      <label for="form_email">Digite seu e-mail:</label>
      <input
        type="text"
        id="form_email"
        placeholder="Email"
        name="email"
      />
    </div>
    <div>
      <label for="form_message">Digite a sua mensagem:</label>
      <textarea id="form_message" name="message"></textarea>
    </div>
    <button type="submit" id="botao">Enviar</button>
  </form>
</main>
<?php
  include __DIR__ . "/includes/footer.php";
?>
  