<?php		


$conn = mysqli_connect("192.168.150.26","root","huprocape#99","banco_rh");
if (mysqli_connect_errno())
{
	echo "Erro" . mysqli_connect_error();
					
}

$cpf_func = "71904930425";
$pesquisa = $conn->query("select * from dados_pessoais where cpf_func='$cpf_func'");

while($row = $pesquisa->fetch_assoc()) 
{
	$nome_func= $row['nome_func'];
}


echo "<script>location.href='http://192.168.150.26/rh/criardir2.php?cpf_func=71904930425';</script>";

?>

