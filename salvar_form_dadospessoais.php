<?php

$conn = mysqli_connect("192.168.150.26","root","huprocape#99","banco_rh");
if (mysqli_connect_errno())
{
	echo "Erro" . mysqli_connect_error();
					
}

$cpf_func = $_POST['cpf_func'];

$pesquisa = $conn->query("select * from dados_pessoais where cpf_func='$cpf_func'");

if(mysqli_num_rows($pesquisa) >= 1) 
{
echo "<script>alert('CPF já cadastrado.');location.href='form_dadospessoais.php';</script>";
die;
}
else
{

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

$cidade = $_POST['citys'];

$cidade = mb_strtoupper($cidade);

$estado = $_POST['estado'];

$estado = mb_strtoupper($estado);

$statusx ='1';

$sql_code = "INSERT INTO dados_pessoais (
    nome_func, 
    cpf_func, 
    rg_func, 
    data_exp, 
    orgao_emissor, 
    data_nasc,
    sexo,
    escolaridade,
    nacionalidade,
    sus,
    tipo_sang,
    pront,
    estado_civil,
    email_func,
    email_func2,
    cel,
    cel2,
    nome_mae, 
    nome_pai,
    nome_conjugue,
    nome_social,
    cep,
    logradouro,
    complemento,
    bairro,
    cidade,
    estado,
    statusx
    ) 
VALUES (
    '$nome_func', 
    '$cpf_func', 
    '$rg_func', 
    '$data_exp', 
    '$orgao_emissor', 
    '$data_nasc', 
    '$sexo', 
    '$escolaridade', 
    '$nacionalidade', 
    '$sus',
    '$tipo_sang',
    '$pront', 
    '$estado_civil', 
    '$email_func', 
    '$email_func2', 
    '$cel', 
    '$cel2', 
    '$nome_mae', 
    '$nome_pai',
    '$nome_conjugue',
    '$nome_social',
    '$cep', 
    '$logradouro', 
    '$complemento', 
    '$bairro', 
    '$cidade',
    '$estado',
    '$statusx')";

$insert = mysqli_query($conn, $sql_code)or die(mysql_error());
}

$pesquisa = $conn->query("select * from dados_pessoais where cpf_func='$cpf_func'");
while($row = $pesquisa->fetch_assoc()) {
$id_func= $row['id_func'];
}

if(isset($_POST["nome_filho"])) 
{
	foreach($_POST["nome_filho"] as $key => $nome_filho) 
	{
		$nasc_filho = isset($_POST["nasc_filho"][$key])? $_POST["nasc_filho"][$key] :null;
        $sql_code = "INSERT INTO dependentes (
            id_func,
            nome, 
            data_nasc
            )
            value
            (
            '$id_func',
            '$nome_filho', 
            '$nasc_filho'
            )";
            $insert = mysqli_query($conn, $sql_code)or die(mysql_error());
		
	}
    
		
}

echo "<script>
function confirmAction() {
    let confirmAction = confirm('Deseja cadastrar os dados profissionais agora ?');
    if (confirmAction == true) {
        location.href='form_dadosprofissionais.php';
    } else {
      alert('Dados Pessoais cadastrados com sucesso.');location.href='painel_cad_func.php';
    }
}
confirmAction();
</script>";


//echo "<script>alert('O serviço está temporariamente fora do ar.');location.href='#';</script>";



?>