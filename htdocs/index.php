<?php // index.php ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1"/>
  <title>Gerador de Currículo</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
  <main class="container">
    <header class="header">
      <h1>Gerador de Currículo</h1>
      <p>Preencha os campos abaixo. Você pode adicionar quantas experiências e referências quiser.</p>
    </header>

    <form id="cvForm" action="gerar.php" method="POST">
      <section class="card">
        <h2>Dados Pessoais</h2>

        <label class="field">
          <span>Nome completo *</span>
          <input type="text" name="nome" id="nome" required />
        </label>

        <div class="row">
          <label class="field small">
            <span>Data de nascimento *</span>
            <input type="date" name="nascimento" id="nascimento" required />
          </label>
          <label class="field small">
            <span>Idade</span>
            <input type="text" name="idade" id="idade" readonly />
          </label>
        </div>

        <label class="field">
          <span>Endereço</span>
          <input type="text" name="endereco" id="endereco" />
        </label>

        <div class="row">
          <label class="field">
            <span>E-mail *</span>
            <input type="email" name="email" id="email" required />
          </label>
          <label class="field">
            <span>Telefone *</span>
            <input type="tel" name="telefone" id="telefone" required />
          </label>
        </div>
      </section>

      <section class="card" id="experiencias-section">
        <h2>Experiências Profissionais</h2>

        <div id="experiencias-list">
          <div class="experiencia-item">
            <label class="field">
              <span>Empresa</span>
              <input type="text" name="empresa[]" />
            </label>
            <div class="row">
              <label class="field small">
                <span>Cargo</span>
                <input type="text" name="cargo[]" />
              </label>
              <label class="field small">
                <span>Período</span>
                <input type="text" name="periodo[]" placeholder="ex: fev 2019 - atual" />
              </label>
            </div>
            <label class="field">
              <span>Descrição</span>
              <textarea name="descricao[]" rows="3" placeholder="Descreva responsabilidades e conquistas"></textarea>
            </label>
            <button type="button" class="btn remove-experience">Remover</button>
            <hr/>
          </div>
        </div>

        <button type="button" id="add-experience" class="btn">+ Adicionar Experiência</button>
      </section>

      <section class="card" id="referencias-section">
        <h2>Referências Pessoais</h2>

        <div id="referencias-list">
          <div class="referencia-item">
            <label class="field">
              <span>Nome</span>
              <input type="text" name="ref_nome[]" />
            </label>
            <label class="field">
              <span>Contato</span>
              <input type="text" name="ref_contato[]" />
            </label>
            <button type="button" class="btn remove-reference">Remover</button>
            <hr/>
          </div>
        </div>

        <button type="button" id="add-reference" class="btn">+ Adicionar Referência</button>
      </section>

      <div class="actions">
        <button type="submit" class="btn primary">Gerar Currículo</button>
      </div>
    </form>

    <footer class="footer">
      <small>Desenvolvido para UNIPAR EAD — Atividade Prática Orientada</small>
    </footer>
  </main>

  <script src="js/script.js"></script>
</body>
</html>
