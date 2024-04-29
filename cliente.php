<?php
$nm_cliente = $_POST['nm_cliente'];
$nm_endereco = $_POST['nm_endereco'];
$nr_endereco = $_POST['nr_endereco'];
$nr_cpf = $_POST['nr_cpf'];
$nr_cnpj = $_POST['nr_cnpj'];
$nr_telefone = $_POST['nr_telefone'];

include 'conexao.php';

$insert = "INSERT INTO tb_cliente VALUES ('$nm_cliente', '$nm_endereco', '$nr_endereco', '$nr_cpf', '$nr_cnpj', '$nr_telefone')";

$query = mysqli_query($conexao, $insert);

echo "Inserido com sucesso!";

?>