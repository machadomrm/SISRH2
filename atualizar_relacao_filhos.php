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

if(isset($_POST["nome_filho"])) 
{

	foreach($_POST["nome_filho"] as $key => $nome_filho) 
	{
		$nasc_filho = isset($_POST["nasc_filho"][$key])? $_POST["nasc_filho"][$key] :null;
        
        $id_filhos = isset($_POST["id_filhos"][$key])? $_POST["id_filhos"][$key] :null;
        

        $sql_code = "update filhos set
            nome='$nome_filho',
            data_nasc='$nasc_filho'
            where id_filhos='$id_filhos'";
        $insert = mysqli_query($conn, $sql_code)or die(mysql_error());
		
	}

    
    	
}




echo "<script>alert('Filhos atualizados com sucesso.');location.href='list_dadospessoais.php?cpf_func=$cpf_func';</script>";
    


//echo "<script>alert('O serviço está temporariamente fora do ar.');location.href='#';</script>";



?>