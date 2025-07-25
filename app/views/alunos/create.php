<?php include __DIR__ . '/../layout/header.php'; ?>

<div class="card">
  <div class="card-body">
    <h2 class="display-6 mb-4">Novo Aluno</h2>

    <form method="POST" action="/alunos/store">
      <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" required>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>

      <div class="mb-3">
        <label for="data_nascimento" class="form-label">Data de Nascimento</label>
        <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
      </div>

      <div class="d-flex justify-content-between">
        <a href="/alunos" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-success">Salvar</button>
      </div>
    </form>
  </div>
</div>

<?php include __DIR__ . '/../layout/footer.php'; ?>