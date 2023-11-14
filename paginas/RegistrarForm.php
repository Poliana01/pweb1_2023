<?php
 include './header.php';
 include '../db.class.php';
?>

<?php
  $db = new DB();
  $db->conn();

   if($_POST){
    $db->insert("aluno",$_POST);
    header("location: AlunoList.php");
  }

?>

    <h3>Sistema Academico</h3>
    <h3>Formulário Registrar Usuário</h3>

    <form action="AlunoForm.php" method="post">
        <input type="hidden" name="id" value="<?php echo !empty($aluno->id) ? $aluno->id :"" ?>">
        
        <label for="nome">Nome</label><br>
        <input type="text" name="nome" value="<?php echo !empty($aluno->nome) ? $aluno->nome :"" ?>"><br>

        <label for="cpf">CPF</label><br>
        <input type="text" name="cpf" value="<?php echo !empty($aluno->cpf) ? $aluno->cpf :"" ?>"><br>

        <label for="c_senha">Confirmar Senha</label><br>
        <input type="password" name="c_senha"  <br>

        <button type="submit">Salvar</button>
        <a href="LoginForm.php"> Voltar </a>

    </form>
<?php include "./footer.php" ?>
