<?php
  include('config.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="minhasvacinas.css">
    <title>Minhas Vacinas</title>
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
            <a class="btn-three" href="tabela.php">Meus Registros</a>
            <a class="btn-four" href="sobrenos.html">Sobre Nós</a>
           </div>
         </div>
     </header>
     <div>
        <h2>Minhas Vacinas</h2>
      </div>
       <div class="info">
            <div class="tabela">
          <style>
     
          .tabela{
          font-family: Arial, Helvetica, sans-serif;
          cursor: pointer;
          text-decoration: none;
          text-align: center;
          margin: auto;
          font-size: 20px;
          }
  
          label{
          color: #5D3303;
          height: 180px;
          left: 200px;
          right: 200px;
          width: 350px;
          margin: auto;
          }

          .inputs{
          height: 30px;
          width: 250px;
          border:none;
          background-color: #F9F4CF;
          border-bottom:1px solid #5D3303;
          font-size: 17px;
          text-align: center;
          }
          .inputs:hover{
          background-color: rgb(11, 69, 34);
          color: white;
          }

          button{
          border-radius: 10px;
          width: 180px;
          background-color: #955F1F;
          color: #F9D897;
          font-family:'arial', cursive; 
          font-size: 17px;
          cursor: pointer;
          }

          button:hover{
          background-color: rgb(11, 69, 34);
          color: white;
          }
                
          </style>
            <form method="POST" name="cadastrar" action="processa.php"> 
                <div class="tb1">
                <label>Vacina: </label>
                <input class="inputs"  type="text" name="vacina" id="vacina"/>
                </div>
                <br><br>
                <div class="tb1">
                <label>Data da aplicação: </label>
                <input class="inputs"  type="date" name="aplicacao" id="aplicacao"/>
                </div>
                <br><br>
                <div class="tb1">
                <label>Próxima aplicação: </label>
                <input class="inputs"  type="date" name="proxima" id="proxima"/>
                </div>
                <br><br>
                <button class="buttons" type="submit" nome="registrar" id="registrar">Registrar</button>
            </form>
            </div>   
</div>
    <footer > 
        <div>Desenvolvido pelos alunos da Univesp PI1 @2023</div>
       </footer>
</body>
</html>
