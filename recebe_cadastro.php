<?php include_once "conexao.php"; ?>

<?php

   $tutor = $_POST['tutor'];
   $telefone = $_POST['telefone'];
   $email = $_POST['email'];
   $pet = $_POST['pet'];
   $idade = $_POST['idade'];
   $vacinado = $_POST['vacinado'];
   $data = $_POST['data'];
   $senha = $_POST['senha'];

   $sql = "INSERT INTO cadastro(tutor, telefone, email, pet, idade, vacinado, data, senha) VALUES('$tutor','$telefone','$email','$pet','$idade','$vacinado',$data,'$senha')";

if (mysqli_query($conn, $sql)) {
    header("location: home.php");
}else{
    echo "Deu ruim!" . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
