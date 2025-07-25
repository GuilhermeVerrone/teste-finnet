<?php include __DIR__ . '/../layout/header.php'; ?>

<div class="card">
  <div class="card-body">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h2 class="display-6 mb-0">Cursos</h2>
      <a href="/cursos/create" class="btn btn-primary">+ Novo Curso</a>
    </div>

    <table class="table table-bordered table-striped align-middle">
      <thead class="table-dark">
        <tr>
          <th>ID</th>
          <th>Título</th>
          <th>Área</th>
          <th style="width: 160px;">Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($cursos as $curso): ?>
          <tr>
            <td><?= $curso['id'] ?></td>
            <td><?= htmlspecialchars($curso['titulo']) ?></td>
            <td><?= htmlspecialchars($curso['area']) ?></td>
            <td>
              <a href="/cursos/edit/<?= $curso['id'] ?>" class="btn btn-warning btn-sm mb-3">✏️ Editar</a>
              <a href="/cursos/delete/<?= $curso['id'] ?>" class="btn btn-danger btn-sm btn-delete">🗑️ Excluir</a>
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
      if (!confirm('Tem certeza que deseja excluir este curso?')) {
        e.preventDefault();
      }
    });
  });
</script>

<?php include __DIR__ . '/../layout/footer.php'; ?>
