<?php
    include('conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
    <title>Cadastro</title>
</head>
<body>
  <header> 
    <div> 
     <section> 
       <h1> Miii-Auau Migos</h1>
        <div class="button-header"> 
           <a class="btn-one" href="home.html">Home</a>
           <a class="btn-two" href="cadastro.html">Cadastrar</a>
           <a class="btn-three" href="index.html">Login</a>
           <a class="btn-four" href="sobrenos.html">Sobre Nós</a>
       </div>
     </div>
 </header>
    <div>
      <h2>Dados do tutor e do animal</h2>
    </div>
     <div class="info">
     <form action="" method="POST" >   
      <p>
      <div class="form-input"> 
        <label>Nome do tutor:</label>
        <input class="inputs"  type="text" name="name" id="nome_tutor"/>
      </div>
      </p>
      <p>
        <div class="form-input"> 
        <label>Telefone:</label>
        <input class="inputs"  type="number" name="telefone" id="telefone"/>
      </div>
      </p>
      <p>
      <div class="form-input"> 
        <label>E-mail:</label>
        <input class="inputs"  type="email" name="email"/>
      </div>
      </p>
      <p>
      <div class="form-input"> 
        <label>Nome do Pet:</label>
        <input  class="inputs" type="text" name="nome_pet"/>
      </div>
      </p>
      <p>
      <div class="form-input"> 
        <label>Idade do Pet:</label>
        <input  class="inputs" type="number" name="idade_pet"/>
      </div>
      </p>
      <p>
      <div class="form-input"> 
        <label>Pet vacinado?</label>
        <input class="inputs" type="text" name="pet_vacinado"/>
      </div>
      </p>
      <p>
      <div class="form-input"> 
        <label>Se sim, qual a última vacina:</label>
        <input class="inputs" type="date" name="data"/>
      </div>
      </p>
      <p>
      <div class="form-input"> 
        <label>Inserir senha:</label>
        <input class="inputs" type="password" name="senha">
      </div>
      </p>
      <p>
      <div class="form-input">
      <button class="buttons" type="submit">Registrar</button>
      </p>
      </div>
     </form>
    </div>

    <footer > 
      <div>Desenvolvido pelos alunos da Univesp PI1 @2023</div>
     </footer>
    </section>
    
    </div> 
    </html>
