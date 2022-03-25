<?php

$conn = mysqli_connect("192.168.150.26","root","huprocape#99","banco_rh");
if (mysqli_connect_errno())
{
	echo "Erro" . mysqli_connect_error();
					
}

$cpf_func = $_GET['cpf_func'];
$pesquisa = $conn->query("select * from dados_pessoais where cpf_func='$cpf_func'");

while($row = $pesquisa->fetch_assoc()) 
{

$id_func= $row['id_func'];
$nome_func= $row['nome_func'];

}

$pesquisax = $conn->query("select * from dados_profissionais where id_func='$id_func'");
if(mysqli_num_rows($pesquisax) < 1) 
{
    echo "<script>
function confirmAction() {
    let confirmAction = confirm('Este funcionário não possui dados profissionais cadastrado. Deseja cadastrar agora ?');
    if (confirmAction == true) {
        location.href='form_dadosprofissionais.php?id_func=$id_func';
    } else {
      location.href='lista_func.php?cpf_func=$cpf_func';
    }
}
confirmAction();
</script>";
}

$pesquisa = $conn->query("select * from dados_profissionais where id_func='$id_func'");

while($row = $pesquisa->fetch_assoc()) 
{

$matricula= $row['matricula'];

$conselho = $row['conselho'];

$ctps = $row['ctps'];

$serie_ctps = $row['serie_ctps'];

$pis = $row['pis'];

$data_pis = $row['data_pis'];
$data_pis = implode("/",array_reverse(explode("-",$data_pis)));

$id_tipopresta = $row['id_tipopresta'];

$id_funcao = $row['id_funcao'];

$id_cargo = $row['id_cargo'];

$data_exercicio = $row['data_exercicio'];
$data_exercicio = implode("/",array_reverse(explode("-",$data_exercicio)));

$especialidade = $row['especialidade'];
$especialidade = ucfirst($especialidade);

$id_setor = $row['id_setor'];

$sigla_sei = $row['sigla_sei'];

$data_adm = $row['data_adm'];
$data_adm = implode("/",array_reverse(explode("-",$data_adm)));

$org_origem = $row['org_origem'];
$org_origem = ucfirst($org_origem);

$org_exercicio = $row['org_exercicio'];
$org_exercicio = ucfirst($org_exercicio);

$sus = $row['sus'];

$vem = $row['vem'];

$portaria = $row['portaria'];

}

$pesquisa1 = $conn->query("select * from tipo_presta where id_tipopresta='$id_tipopresta'");

while($row = $pesquisa1->fetch_assoc()) 
{
    $tipo_presta = $row['tipo_presta'];

}

$pesquisa2 = $conn->query("select * from funcoes where id_funcao='$id_funcao'");

while($row = $pesquisa2->fetch_assoc()) 
{
    $nome_funcao = $row['nome_funcao'];

}

$pesquisa3 = $conn->query("select * from cargo where id_cargo='$id_cargo'");

while($row = $pesquisa3->fetch_assoc()) 
{
    $nome_cargo = $row['nome_cargo'];

}

$pesquisa4 = $conn->query("select * from setores where id_setor='$id_setor'");

while($row = $pesquisa4->fetch_assoc()) 
{
    $nome_setor = $row['nome_setor'];

}

$pesquisa5 = $conn->query("select * from setores_sei where sigla='$sigla_sei'");

while($row = $pesquisa5->fetch_assoc()) 
{
    $nome_setor_sei = $row['nome'];

}

$datax=date('d_m_Y').$nome_func;

				$logo="<img src='http://192.168.151.24/sisrh2/img/logo-procape.png'>
					   <img id='upe' src='http://192.168.151.24/sisrh2/img/logo.upe.png'>";

				$data_hoje=date('d/m/Y');

                $cabecalho="
				<h3>Relatório de Dados Profissionais<br>
				Recife, ".$data_hoje."
				</h3><hr>";

                $corpo='
				<p><strong>Nome: </strong>'.$nome_func.'<br>
                <p><strong>Matrícula: </strong>'.$matricula.'<br>
				<strong>Conselho: </strong>'.$conselho.'<br>
				<strong>CTPS: </strong>'.$ctps.'<br>
				<strong>Série: </strong>'.$serie_ctps.'<br>
				<strong>PIS/PASEP: </strong>'.$pis.'<br>
				<strong>Data de Cadastro PIS: </strong>'.$data_pis.'<br>
				<strong>Tipo de Prestador: </strong>'.$tipo_presta.'<br>
				<strong>Função: </strong>'.$nome_funcao.'<br>
				<strong>Cargo: </strong>'.$nome_cargo.'<br>
				<strong>Especialidade: </strong>'.$especialidade.'<br>
				<strong>Data de Exercício: </strong>'.$data_exercicio.'<br>
				<strong>Setor Hospital: </strong>'.$nome_setor.'<br>
				<strong>Setor S.E.I: </strong>'.$sigla_sei.'<br>
				<strong>Data de Admissão: </strong>'.$data_adm.'<br>
				<strong>Orgão de Origem: </strong>'.$org_origem.'<br>
				<strong>Orgão em Exercício: </strong>'.$org_exercicio.'<br>
				<strong>Portaria: </strong>'.$portaria.'<br>
				'.$lista.'<br>';

				$style='
				<html><head>
				<style type="text/css">
				#footer {
					position: fixed;
					bottom: 20;
					width: 100%;
					text-align: center;
				}
				#upe{
					width: 100px;
    				height: 73px;
					position: relative;
					float: right;
					margin-top: -1%;
				}
				</style>';
                    

                $rodape="
				<div id='footer'>
				<h6>© 2021 Procape<br>
				Universidade de Pernambuco
				</h6></div>";


            require_once 'dompdf/lib/html5lib/Parser.php';
			require_once 'dompdf/src/Autoloader.php';

			Dompdf\Autoloader::register();
			use Dompdf\Dompdf;
			use Dompdf\Options;

			$options = new Options();
			$options->set('isRemoteEnabled', true);

			// inicializando o objeto Dompdf
			$dompdf = new Dompdf($options);

			// coloque nessa variável o código HTML que você quer que seja inserido no PDF
			//$codigo_html = "<h1>Olá mundo!</h1><p>Geramos o arquivo com o dom pdf, ihul!</p>";

			// carregamos o código HTML no nosso arquivo PDF
			$dompdf->loadHtml($logo.$cabecalho.$corpo.$style.$rodape);

			// (Opcional) Defina o tamanho (A4, A3, A2, etc) e a oritenação do papel, que pode ser 'portrait' (em pé) ou 'landscape' (deitado)
			$dompdf->setPaper('A4', 'portrait');

			// Renderizar o documento
			$dompdf->render();

			// pega o código fonte do novo arquivo PDF gerado
			$output = $dompdf->output();

			// defina aqui o nome do arquivo que você quer que seja salvo
			file_put_contents("pdf/".$datax.".pdf", $output);

			// redirecionamos o usuário para o download do arquivo
			 die("<script>location.href='pdf/".$datax.".pdf';</script>");


?>