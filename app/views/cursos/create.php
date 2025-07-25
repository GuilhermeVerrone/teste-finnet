<h1>Novo Curso</h1>
<form method="POST" action="/cursos/store">
  <label>Título:</label><br>
  <input type="text" name="titulo"><br><br>

  <label>Descrição:</label><br>
  <textarea name="descricao"></textarea><br><br>

  <label>Área:</label><br>
  <select name="area_id">
    <?php foreach ($areas as $area): ?>
      <option value="<?= $area['id'] ?>"><?= htmlspecialchars($area['titulo']) ?></option>
    <?php endforeach; ?>
  </select><br><br>

  <button type="submit">Salvar</button>
</form>
