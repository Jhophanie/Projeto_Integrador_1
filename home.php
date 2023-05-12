<?php

   if(!isset($_SESSION)) {
    session_start();
   }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" type="text/css" href="home.css">
    <title>Home</title>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Ingrid+Darling&display=swap');
    </style>
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
      <div class="container">
        <h2>
          Bem vindo, <?php echo $_SESSION['nome_tutor']; ?> ! Vamos cuidar do nosso melhor amigo?
        </h2>
        </div>
      </div>

       <div class="photos"> 
        <img class="photo-one" alt="Calendario de Vacinação" src="img/saúde.png">              
        <img class="photo-two" alt="A importância de Vacinar" src="img/hospital.jpeg">        
        <img class="photo-three" alt="Minhas Vacinas" src="img/medicina-de-felinos-768x532.jpg">
        
      </div>
      <div class="buttons">
        <a class="btn-cadastrar" href="calendario.html"> <b>Calendário de Vacinação </b></button>
        <a class="btn-verificar" href="vacinar.html"><b>A importância de vacinar</b></button>
        <a class="btn-registrar" href="minhasvacinas.html"><b>Minhas Vacinas</b></button>
      </div>
   </div>
    
    
   <footer > 
    <div>Desenvolvido pelos alunos da Univesp PI1 @2023</div>
   </footer>

</body>
</html>
