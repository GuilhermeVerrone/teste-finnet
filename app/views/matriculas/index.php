<?php include __DIR__ . '/../layout/header.php'; ?>

<div class="card">
  <div class="card-body">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h2 class="display-6 mb-0">Matrículas</h2>
      <a href="/matriculas/create" class="btn btn-primary">+ Nova Matrícula</a>
    </div>

    <table class="table table-bordered table-striped align-middle">
      <thead class="table-dark">
        <tr>
          <th>ID</th>
          <th>Aluno</th>
          <th>Curso</th>
          <th>Data</th>
          <th style="width: 120px;">Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($matriculas as $m): ?>
          <tr>
            <td><?= $m['id'] ?></td>
            <td><?= htmlspecialchars($m['aluno']) ?></td>
            <td><?= htmlspecialchars($m['curso']) ?></td>
            <td><?= $m['data_matricula'] ?></td>
            <td>
              <a href="/matriculas/delete/<?= $m['id'] ?>" class="btn btn-danger btn-sm btn-delete">🗑️ Excluir</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>

<script>
  $(function () {
    $('.btn-delete').click(function (e) {
      if (!confirm('Tem certeza que deseja excluir esta matrícula?')) {
        e.preventDefault();
      }
    });
  });
</script>

<?php include __DIR__ . '/../layout/footer.php'; ?>
