<h1>Cursos</h1>
<a href="/cursos/create">Novo Curso</a>
<table border="1">
  <tr>
    <th>ID</th>
    <th>Título</th>
    <th>Área</th>
    <th>Ações</th>
  </tr>
  <?php foreach ($cursos as $curso): ?>
  <tr>
    <td><?= $curso['id'] ?></td>
    <td><?= htmlspecialchars($curso['titulo']) ?></td>
    <td><?= htmlspecialchars($curso['area']) ?></td>
    <td>
      <a href="/cursos/edit/<?= $curso['id'] ?>">Editar</a> |
      <a href="/cursos/delete/<?= $curso['id'] ?>" onclick="return confirm('Excluir?')">Excluir</a>
    </td>
  </tr>
  <?php endforeach; ?>
</table>