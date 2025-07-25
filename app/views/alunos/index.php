<h1>Alunos</h1>

<form method="GET" action="/alunos">
  <input type="text" name="search" placeholder="Buscar por nome ou e-mail" value="<?= $_GET['search'] ?? '' ?>">
  <button type="submit">Buscar</button>
</form>

<a href="/alunos/create">Novo Aluno</a>

<table border="1">
  <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Email</th>
    <th>Data Nascimento</th>
    <th>Ações</th>
  </tr>
  <?php foreach ($alunos as $aluno): ?>
  <tr>
    <td><?= $aluno['id'] ?></td>
    <td><?= htmlspecialchars($aluno['nome']) ?></td>
    <td><?= htmlspecialchars($aluno['email']) ?></td>
    <td><?= $aluno['data_nascimento'] ?></td>
    <td>
      <a href="/alunos/edit/<?= $aluno['id'] ?>">Editar</a> |
      <a href="/alunos/delete/<?= $aluno['id'] ?>" onclick="return confirm('Excluir?')">Excluir</a>
    </td>
  </tr>
  <?php endforeach; ?>
</table>
