<?php
include"config.php";
 $nome = $_POST["nome"];
 $usuario = $_POST["usuario"];
 $email = $_POST["email"];
 $telefone = $_POST["telefone"];
 $senha = $_POST["senha"];

 $sql= "INSERT INTO `usuarios`(`nome`, `usuario`, `email`, `telefone`, `senha`) 
 VALUES ('$nome','$usuario','$email','$telefone','$senha')";

if(mysqli_query($conn , $sql)){
    print "<script>location.href='aluno.php';</script>";;
}else {
    echo"NÂO FOI CADASTRADO";
}