<?php include __DIR__ . '/../layout/header.php'; ?>

<div class="card">
  <div class="card-body">
    <h2 class="display-6 mb-4">Nova Matrícula</h2>

    <form method="POST" action="/matriculas/store">
      <!-- Aluno -->
      <div class="mb-3">
        <label for="aluno_id" class="form-label">Aluno</label>
        <select name="aluno_id" id="aluno_id" class="form-select" required>
          <option value="" disabled selected>Selecione um aluno</option>
          <?php foreach ($alunos as $a): ?>
            <option value="<?= $a['id'] ?>"><?= htmlspecialchars($a['nome']) ?></option>
          <?php endforeach; ?>
        </select>
      </div>

      <!-- Cursos -->
      <div class="mb-3">
        <label class="form-label">Cursos</label>
        <div class="row">
          <?php foreach ($cursos as $c): ?>
            <div class="col-md-6">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="curso_ids[]" id="curso_<?= $c['id'] ?>" value="<?= $c['id'] ?>">
                <label class="form-check-label" for="curso_<?= $c['id'] ?>">
                  <?= htmlspecialchars($c['titulo']) ?>
                </label>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Botões -->
      <div class="d-flex justify-content-between">
        <a href="/matriculas" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-success">Matricular</button>
      </div>
    </form>
  </div>
</div>

<?php include __DIR__ . '/../layout/footer.php'; ?>