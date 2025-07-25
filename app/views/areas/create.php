<?php include __DIR__ . '/../layout/header.php'; ?>

<div class="card">
  <div class="card-body">
    <h2 class="display-6 mb-4">Nova Área de Curso</h2>

    <form method="POST" action="/areas/store">
      <div class="mb-3">
        <label for="titulo" class="form-label">Título</label>
        <input type="text" class="form-control" id="titulo" name="titulo" required>
      </div>

      <div class="mb-3">
        <label for="descricao" class="form-label">Descrição</label>
        <textarea class="form-control" id="descricao" name="descricao" rows="4"></textarea>
      </div>

      <div class="d-flex justify-content-between">
        <a href="/areas" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-success">Salvar</button>
      </div>
    </form>
  </div>
</div>

<?php include __DIR__ . '/../layout/footer.php'; ?>