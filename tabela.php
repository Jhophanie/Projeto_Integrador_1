<?php
 
  include('config.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minhas Vacinas</title>
    <link rel="stylesheet" type="text/css" href="tabela.css">
</head>
<body>
    <header> 
        <div> 
         <section> 
           <h1> Miii-Auau Migos</h1>
            <div class="button-header"> 
            <a class="btn-one" href="home.php">Home</a>
            <a class="btn-two" href="cadastro.php">Cadastrar</a>
            <a class="btn-three" href="index.php">Login</a>
            <a class="btn-four" href="sobrenos.html">Sobre Nós</a>
           </div>
         </div>
     </header>
     <div>
        <h2>Minhas Vacinas</h2>
      </div>

      <table border = "1px solid">
          <tr>
	        <th> Vacina </th>
	        <th> Data da aplicação </th>
	        <th> Próxima aplicação </th>
          </tr>
    
          <?php

          $sql = "SELECT * FROM dados";
          $query = mysqli_query($conn, $sql);

      while ($resultado = mysqli_fetch_array($query)){
          $vacina = $resultado['vacina'];
          $aplicacao = $resultado['aplicacao'];
          $proxima = $resultado['proxima'];

          echo "<tr>";
          echo "<td>".$vacina."</td>";
          echo "<td>".$aplicacao."</td>";
          echo "<td>".$proxima."</td>";
          echo "</str>";
  }
?>
      </table>

      <footer > 
        <div>Desenvolvido pelos alunos da Univesp PI1 @2023</div>
       </footer>
</body>
</html>


