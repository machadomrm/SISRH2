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

        if (empty ($nome_filho)){
            echo "  <script>
                        function confirmAction() 
                        {
                            let confirmAction = confirm('Deseja cadastrar os dados profissionais agora ?');
                            if (confirmAction == true) {
                                location.href='form_dadosprofissionais.php?id_func=$id_func';
                            } else {
                            alert('Dados Pessoais cadastrados com sucesso.');location.href='painel.php';
                            }
                        }
                        confirmAction();
                    </script>";
            die;
           }
           else{
              
		$nasc_filho = isset($_POST["nasc_filho"][$key])? $_POST["nasc_filho"][$key] :null;
        $sql_code = "INSERT INTO filhos (
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
    	
}




echo "<script>alert('Filhos incluidos com sucesso.');location.href='list_dadospessoais.php?cpf_func=$cpf_func';</script>";
    


//echo "<script>alert('O serviço está temporariamente fora do ar.');location.href='#';</script>";



?>