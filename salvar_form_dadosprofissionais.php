<?php

$conn = mysqli_connect("192.168.150.26","root","huprocape#99","banco_rh");
if (mysqli_connect_errno())
{
	echo "Erro" . mysqli_connect_error();
					
}

$id_func = $_POST['id_func'];

$matricula = $_POST['matricula'];

$conselho = $_POST['conselho'];

$ctps = $_POST['ctps'];

$serie_ctps = $_POST['serie_ctps'];

$pis = $_POST['pis'];

$data_pis = $_POST['data_pis'];

$id_tipopresta = $_POST['id_tipopresta'];

$id_funcao = $_POST['id_funcao'];

$id_cargo = $_POST['id_cargo'];

$especialidade = $_POST['especialidade'];

$data_exercicio = $_POST['data_exercicio'];

$id_setor = $_POST['id_setor'];

$sigla_sei = $_POST['sigla_sei'];

$data_adm = $_POST['data_adm'];

$org_origem = $_POST['org_origem'];

$org_exercicio = $_POST['org_exercicio'];

$sus = $_POST['sus'];

$vem = $_POST['vem'];

$portaria = $_POST['portaria'];

$sql_code = "INSERT INTO dados_profissionais (
    id_func, 
    matricula, 
    conselho, 
    ctps, 
    pis, 
    data_pis,
    id_tipopresta,
    id_funcao,
    id_cargo,
    especialidade,
    data_exercicio,
    id_setor,
    sigla_sei,
    data_adm,
    org_origem,
    org_exercicio,
    sus,
    vem,
    portaria,
    serie_ctps
    ) 
VALUES (
    '$id_func', 
    '$matricula', 
    '$conselho', 
    '$ctps', 
    '$pis', 
    '$data_pis', 
    '$id_tipopresta', 
    '$id_funcao', 
    '$id_cargo', 
    '$especialidade',
    '$data_exercicio',
    '$id_setor', 
    '$sigla_sei', 
    '$data_adm', 
    '$org_origem', 
    '$org_exercicio', 
    '$sus', 
    '$vem',
    '$portaria',
    '$serie_ctps')";

$insert = mysqli_query($conn, $sql_code)or die(mysql_error());

echo "<script>alert('Dados Profissionais cadastrados com sucesso.');location.href='painel.php';</script>";
//echo "<script>alert('O serviço está temporariamente fora do ar.');location.href='#';</script>";

?>