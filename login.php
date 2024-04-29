<?php

$nome = $_POST['login'];
$senha = $_POST['senha'];

include 'conexao.php'

$select = "SELECT = FROM tb_user WHERE login = '$nome'"; 

$squary = mysqli_query($conexao,$select);

$result = mysqli_fetch_array($squery);

$name_banco = $result['login'];
$senha_banco = $result['senha'];

if ($nome == $name_banco && $senha == $senha_banco) {
header('location; cliente.html');
}else{ 

    echo "<script>alert('Usuário Invalido'); history.back();</script>";

}

?> 
