<?php include_once "config.php"; ?>

<?php

    $vacina = $_POST['vacina'];
    $aplicacao = $_POST['aplicacao'];
    $proxima = $_POST['proxima'];

    $sql = "INSERT INTO dados(vacina, aplicacao, proxima) VALUE('$vacina', '$aplicacao', '$proxima')";

if (mysqli_query($conn, $sql)) {
    header("location: tabela.php");
}else{
    echo "Erro" . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
