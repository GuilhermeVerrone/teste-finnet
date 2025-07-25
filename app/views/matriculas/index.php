<h1>Matrículas</h1>
<a href="/matriculas/create">Nova Matrícula</a>

<table border="1">
  <tr>
    <th>ID</th>
    <th>Aluno</th>
    <th>Curso</th>
    <th>Data</th>
    <th>Ações</th>
  </tr>
  <?php foreach ($matriculas as $m): ?>
  <tr>
    <td><?= $m['id'] ?></td>
    <td><?= htmlspecialchars($m['aluno']) ?></td>
    <td><?= htmlspecialchars($m['curso']) ?></td>
    <td><?= $m['data_matricula'] ?></td>
    <td>
      <a href="/matriculas/delete/<?= $m['id'] ?>" onclick="return confirm('Excluir?')">Excluir</a>
    </td>
  </tr>
  <?php endforeach; ?>
</table>
