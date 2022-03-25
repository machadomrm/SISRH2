<?php

$conn = mysqli_connect("192.168.150.26","root","huprocape#99","banco_rh");
if (mysqli_connect_errno())
{
	echo "Erro" . mysqli_connect_error();
					
}

$id_func = $_POST['id_func'];

$pesquisa = $conn->query("select * from dados_pessoais where id_func='$id_func'");

while($row = $pesquisa->fetch_assoc()) 
{

$cpf_func= $row['cpf_func'];

}

$matricula = $_POST['matricula'];

$conselho = $_POST['conselho'];

$ctps = $_POST['ctps'];

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

$sql_code = "update dados_profissionais set
    matricula='$matricula',
    conselho='$conselho',
    ctps='$ctps', 
    pis='$pis',
    data_pis='$data_pis', 
    id_tipopresta='$id_tipopresta',
    id_funcao='$id_funcao',
    id_cargo='$id_cargo',
    especialidade='$especialidade',
    data_exercicio='$data_exercicio',
    id_setor='$id_setor',
    sigla_sei='$sigla_sei',
    data_adm='$data_adm',
    org_origem='$org_origem',
    org_exercicio='$org_exercicio',
    sus='$sus',
    vem='$vem',
    portaria='$portaria'
    where id_func='$id_func'";

    $insert = mysqli_query($conn, $sql_code)or die(mysql_error());
    
    echo "<script>alert('Dados Profissionais atualizados com sucesso.');location.href='list_dadosprofissionais.php?cpf_func=$cpf_func';</script>";
    
//echo "<script>alert('O serviço está temporariamente fora do ar.');location.href='#';</script>";



?>