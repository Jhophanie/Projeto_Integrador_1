<?php
    include('conexao.php');

    if(isset($_POST['email']) || isset($_POST['senha'])) {

      if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";

      } else if(strlen($_POST['senha']) == 0) {
      echo "Informe a sua senha";

      } else {
      
      $email = $mysqli->real_escape_string($_POST['email']);
      $senha = $mysqli->real_escape_string($_POST['senha']);

      $sql_code = "SELECT * FROM projetointegrador WHERE email = '$email' AND senha = $senha'";
      $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: ". $mysqli->error);

      $quantidade =$sql_query->num_rows;

      if($quantidade == 1){

        $usuario = $sql_query->fetch_assoc();

        if(!isset($_SESSION)) {
            session_start();

        }

        $_SESSION['ID'] = $usuario['ID'];
        $_SESSION['name_tutor'] = $usuario['nome_tutor'];
        
        header("Location: home.php");

      } else {
        echo "Ops! Algo não está certo. Confira o seu E-mail ou Senha";
      }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>login</title>
</head>
<body>
    <section> 
    <div class="imagem">
        <img src="img/Logo.png" alt="Logotipo" height="20%" width="20%">
    </div>

       <div class="login"> 
         <h1 class="text">Miii-Auau Migos</h1>
          <div class="inputs"> 
 
            <input type="email" name="email" id="email" placeholder="Nome">
         
            <input type="password" name="senha" id="senha" placeholder="Senha">

            <button class="btn" type="submit">Acessar</button>

            </div>

            <div>
              <div class="containe"> 
              <a class="cadastro" href="cadastro.php"> Não tem uma conta. Toque aqui e cadastre agora mesmo</a>
            </div>
          </div>
        </div>  
  </section>

  <footer > 
    <div>Desenvolvido pelos alunos da Univesp PI1 @2023</div>
   </footer>

</body>
</html>
