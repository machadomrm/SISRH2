<?php

$conn = mysqli_connect("192.168.150.26","root","huprocape#99","banco_rh");
if (mysqli_connect_errno())
{
	echo "Erro" . mysqli_connect_error();
					
}

$cpf_func = $_POST['cpf_func'];

$pesquisa = $conn->query("select * from dados_pessoais where cpf_func='$cpf_func'");

while($row = $pesquisa->fetch_assoc()) 
{
    $statusx= $row['statusx'];
}

$nome_func = $_POST['nome_func'];
$nome_func = mb_strtoupper($nome_func);

$rg_func = $_POST['rg_func'];

$data_exp = $_POST['data_exp'];

$orgao_emissor = $_POST['orgao_emissor'];

$data_nasc = $_POST['data_nasc'];

$sexo = $_POST['sexo'];

$escolaridade = $_POST['escolaridade'];

$nacionalidade = $_POST['nacionalidade'];

$nacionalidade = mb_strtoupper($nacionalidade);

$sus = $_POST['sus'];

$tipo_sang = $_POST['tipo_sang'];

$pront = $_POST['pront'];

$estado_civil = $_POST['estado_civil'];

$email_func = $_POST['email_func'];

$email_func2 = $_POST['email_func2'];

$cel = $_POST['cel'];

$cel2 = $_POST['cel2'];

$nome_mae = $_POST['nome_mae'];

$nome_mae = mb_strtoupper($nome_mae);

$nome_pai = $_POST['nome_pai'];

$nome_pai = mb_strtoupper($nome_pai);

$nome_conjugue = $_POST['nome_conjugue'];

$nome_conjugue = mb_strtoupper($nome_conjugue);

$nome_social = $_POST['nome_social'];

$nome_social = mb_strtoupper($nome_social);

$cep = $_POST['cep'];

$logradouro = $_POST['logradouro'];

$logradouro = mb_strtoupper($logradouro);

$complemento = $_POST['complemento'];

$complemento = mb_strtoupper($complemento);

$bairro = $_POST['bairro'];

$bairro = mb_strtoupper($bairro);

$cidade = $_POST['city'];

$cidade = mb_strtoupper($cidade);

$estado = $_POST['estado'];

$estado = mb_strtoupper($estado);

$sql_code = "update dados_pessoais set
    nome_func='$nome_func',
    cpf_func='$cpf_func',
    rg_func='$rg_func', 
    data_exp='$data_exp',
    orgao_emissor='$orgao_emissor', 
    data_nasc='$data_nasc',
    sexo='$sexo',
    escolaridade='$escolaridade',
    nacionalidade='$nacionalidade',
    sus='$sus',
    tipo_sang='$tipo_sang',
    pront='$pront',
    estado_civil='$estado_civil',
    email_func='$email_func',
    email_func2='$email_func2',
    cel='$cel',
    cel2='$cel2',
    nome_mae='$nome_mae',
    nome_pai='$nome_pai',
    nome_conjugue='$nome_conjugue',
    nome_social='$nome_social',
    cep='$cep',
    logradouro='$logradouro',
    complemento='$complemento',
    bairro='$bairro',
    cidade='$cidade',
    estado='$estado',
    statusx='$statusx'
    where cpf_func='$cpf_func'";

    $insert = mysqli_query($conn, $sql_code)or die(mysql_error());
    
    echo "<script>alert('Dados Pessoais atualizados com sucesso.');location.href='list_dadospessoais.php?cpf_func=$cpf_func';</script>";
    
//echo "<script>alert('O serviço está temporariamente fora do ar.');location.href='#';</script>";



?>