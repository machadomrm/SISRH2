<?php

$conn = mysqli_connect("192.168.150.26","root","huprocape#99","banco_rh");
if (mysqli_connect_errno())
{
	echo "Erro" . mysqli_connect_error();
					
}

$cpf_func = $_POST['cpf_func'];

$pesquisa = $conn->query("select * from dados_pessoais where cpf_func='$cpf_func'");

if(mysqli_num_rows($pesquisa) < 1) 
{
    echo "<meta http-equiv='refresh' content=3;url='pesquisar_func.php'>";
    die('► CPF Inválido ! ◄');
}


$pesquisa = $conn->query("select * from dados_pessoais where cpf_func='$cpf_func'");

if(mysqli_num_rows($pesquisa) >= 2) 
{
    echo "<script>location.href='lista_func2.php?cpf_func=$cpf_func';</script>";
    die;
}
else
{
    echo "<meta http-equiv='refresh' content=1;url='lista_func.php?cpf_func=".$cpf_func."'>";
    die;
}

?>