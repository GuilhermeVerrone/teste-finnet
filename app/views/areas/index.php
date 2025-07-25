<?php include __DIR__ . '/../layout/header.php'; ?>

<div class="card">
  <div class="card-body">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h2 class="display-6">Áreas de Curso</h2>
      <a href="/areas/create" class="btn btn-primary">+ Nova Área</a>
    </div>

    <!-- Exibe mensagens de feedback -->
    <?php if (!empty($_SESSION['mensagem'])): ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= $_SESSION['mensagem']; unset($_SESSION['mensagem']); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
      </div>
    <?php endif; ?>

    <table class="table table-bordered table-striped align-middle">
      <thead class="table-dark">
        <tr>
          <th>ID</th>
          <th>Título</th>
          <th>Descrição</th>
          <th style="width: 160px;">Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($areas as $area): ?>
          <tr>
            <td><?= $area['id'] ?></td>
            <td><?= $area['titulo'] ?></td>
            <td><?= $area['descricao'] ?></td>
            <td>
              <a href="/areas/edit/<?= $area['id'] ?>" class="btn btn-sm btn-warning mb-3">✏️ Editar</a>
              <a href="/areas/delete/<?= $area['id'] ?>" class="btn btn-sm btn-danger btn-delete">🗑️ Excluir</a>
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
      if (!confirm('Tem certeza que deseja excluir esta área?')) {
        e.preventDefault();
      }
    });
  });
</script>

<?php include __DIR__ . '/../layout/footer.php'; ?>