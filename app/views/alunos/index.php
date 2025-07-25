<?php include __DIR__ . '/../layout/header.php'; ?>

<div class="card">
  <div class="card-body">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h2 class="display-6 mb-0">Alunos</h2>
      <a href="/alunos/create" class="btn btn-primary">+ Novo Aluno</a>
    </div>

    <!-- Formulário de busca -->
    <form method="GET" action="/alunos" class="row g-2 mb-3">
      <div class="col-md-10">
        <input class="form-control" type="text" name="search" placeholder="Buscar por nome ou e-mail" value="<?= $_GET['search'] ?? '' ?>">
      </div>
      <div class="col-md-2 d-grid">
        <button type="submit" class="btn btn-success">Buscar</button>
      </div>
    </form>

    <!-- Tabela -->
    <table class="table table-bordered table-striped align-middle">
      <thead class="table-dark">
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Email</th>
          <th>Data Nascimento</th>
          <th style="width: 170px;">Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($alunos as $aluno): ?>
        <tr>
          <td><?= $aluno['id'] ?></td>
          <td><?= htmlspecialchars($aluno['nome']) ?></td>
          <td><?= htmlspecialchars($aluno['email']) ?></td>
          <td><?= $aluno['data_nascimento'] ?></td>
          <td>
            <a href="/alunos/edit/<?= $aluno['id'] ?>" class="btn btn-warning btn-sm mb-3">✏️ Editar</a>
            <a href="/alunos/delete/<?= $aluno['id'] ?>" class="btn btn-danger btn-sm btn-delete">🗑️ Excluir</a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>

<script>
  $(function() {
    $('.btn-delete').click(function(e) {
      if (!confirm('Tem certeza que deseja excluir este aluno?')) {
        e.preventDefault();
      }
    });
  });
</script>

<?php include __DIR__ . '/../layout/footer.php'; ?>