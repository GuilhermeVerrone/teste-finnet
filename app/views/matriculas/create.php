<h1>Nova Matrícula</h1>

<form method="POST" action="/matriculas/store">
  <label>Aluno:</label><br>
  <select name="aluno_id">
    <?php foreach ($alunos as $a): ?>
      <option value="<?= $a['id'] ?>"><?= htmlspecialchars($a['nome']) ?></option>
    <?php endforeach; ?>
  </select><br><br>

  <label>Cursos:</label><br>
  <?php foreach ($cursos as $c): ?>
    <input type="checkbox" name="curso_ids[]" value="<?= $c['id'] ?>">
    <?= htmlspecialchars($c['titulo']) ?><br>
  <?php endforeach; ?>

  <br>
  <button type="submit">Matricular</button>
</form>
