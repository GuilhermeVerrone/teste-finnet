<h1>Editar Área de Curso</h1>
<form method="POST" action="/areas/update/<?= $area['id'] ?>">
  <label>Título:</label><br>
  <input type="text" name="titulo" value="<?= htmlspecialchars($area['titulo']) ?>"><br><br>
  <label>Descrição:</label><br>
  <textarea name="descricao"><?= htmlspecialchars($area['descricao']) ?></textarea><br><br>
  <button type="submit">Atualizar</button>
</form>