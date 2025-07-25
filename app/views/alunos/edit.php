<h1>Editar Aluno</h1>
<form method="POST" action="/alunos/update/<?= $aluno['id'] ?>">
  <label>Nome:</label><br>
  <input type="text" name="nome" value="<?= htmlspecialchars($aluno['nome']) ?>"><br><br>

  <label>Email:</label><br>
  <input type="email" name="email" value="<?= htmlspecialchars($aluno['email']) ?>"><br><br>

  <label>Data de Nascimento:</label><br>
  <input type="date" name="data_nascimento" value="<?= $aluno['data_nascimento'] ?>"><br><br>

  <button type="submit">Atualizar</button>
</form>
