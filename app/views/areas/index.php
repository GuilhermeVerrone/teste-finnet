<h1>Áreas de Curso</h1>
<a href="/areas/create">Nova Área</a>
<table border="1">
  <tr>
    <th>ID</th>
    <th>Título</th>
    <th>Ações</th>
  </tr>
  <?php foreach ($areas as $area): ?>
  <tr>
    <td><?= $area['id'] ?></td>
    <td><?= htmlspecialchars($area['titulo']) ?></td>
    <td>
      <a href="/areas/edit/<?= $area['id'] ?>">Editar</a> |
      <a href="/areas/delete/<?= $area['id'] ?>" onclick="return confirm('Excluir?')">Excluir</a>
    </td>
  </tr>
  <?php endforeach; ?>
</table>