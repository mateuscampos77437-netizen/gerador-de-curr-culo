<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nome = $_POST['nome'];
  $nascimento = $_POST['nascimento'];
  $idade = $_POST['idade'];
  $endereco = $_POST['endereco'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $empresas = $_POST['empresa'];
  $cargos = $_POST['cargo'];
  $periodos = $_POST['periodo'];
  $descricoes = $_POST['descricao'];
  $refNomes = $_POST['ref_nome'];
  $refContatos = $_POST['ref_contato'];
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <title>Currículo de <?php echo htmlspecialchars($nome); ?></title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <main class="curriculo">
    <header>
      <h1><?php echo htmlspecialchars($nome); ?></h1>
      <p><b>Nascimento:</b> <?php echo htmlspecialchars($nascimento); ?> (<?php echo htmlspecialchars($idade); ?> (anos)</p>
      <p><b>Endereço:</b> <?php echo htmlspecialchars($endereco); ?></p>
      <p><b>E-mail:</b> <?php echo htmlspecialchars($email); ?></p>
      <p><b>Telefone:</b> <?php echo htmlspecialchars($telefone); ?></p>
    </header>

    <section>
      <h2>Experiências Profissionais</h2>
      <?php for ($i = 0; $i < count($empresas); $i++): ?>
        <?php if (!empty($empresas[$i])): ?>
          <div class="bloco">
            <h3><?php echo htmlspecialchars($empresas[$i]); ?></h3>
            <p><b>Cargo:</b> <?php echo htmlspecialchars($cargos[$i]); ?></p>
            <p><b>Período:</b> <?php echo htmlspecialchars($periodos[$i]); ?></p>
            <p><?php echo nl2br(htmlspecialchars($descricoes[$i])); ?></p>
          </div>
        <?php endif; ?>
      <?php endfor; ?>
    </section>

    <section>
      <h2>Referências Pessoais</h2>
      <?php for ($i = 0; $i < count($refNomes); $i++): ?>
        <?php if (!empty($refNomes[$i])): ?>
          <p><?php echo htmlspecialchars($refNomes[$i]); ?> — <?php echo htmlspecialchars($refContatos[$i]); ?></p>
        <?php endif; ?>
      <?php endfor; ?>
    </section>

    <footer>
      <button onclick="window.print()">Imprimir Currículo</button>
      <a href="index.php">Voltar</a>
    </footer>
  </main>
</body>
</html>
