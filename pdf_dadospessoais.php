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

$rg_func = $row['rg_func'];

$data_exp = $row['data_exp'];

$orgao_emissor = $row['orgao_emissor'];

$data_nasc = $row['data_nasc'];
$data_nasc = implode("/",array_reverse(explode("-",$data_nasc)));


$sexo = $row['sexo'];
$sexo = mb_strtoupper($sexo);

$escolaridade = $row['escolaridade'];

$nacionalidade = $row['nacionalidade'];

$nacionalidade = mb_strtoupper($nacionalidade);

$sus = $row['sus'];

$tipo_sang = $row['tipo_sang'];

$pront = $row['pront'];

$estado_civil = $row['estado_civil'];

$estado_civil = mb_strtoupper($estado_civil);

$email_func = $row['email_func'];

$email_func2 = $row['email_func2'];

$cel = $row['cel'];

$cel2 = $row['cel2'];

$nome_mae = $row['nome_mae'];

$nome_mae = mb_strtoupper($nome_mae);

$nome_pai = $row['nome_pai'];

$nome_pai = mb_strtoupper($nome_pai);

$nome_conjugue = $row['nome_conjugue'];

$nome_conjugue = mb_strtoupper($nome_conjugue);

$nome_social = $row['nome_social'];

$nome_social = mb_strtoupper($nome_social);

$cep = $row['cep'];

$logradouro = $row['logradouro'];

$logradouro = mb_strtoupper($logradouro);

$complemento = $row['complemento'];

$complemento = mb_strtoupper($complemento);

$bairro = $row['bairro'];

$bairro = mb_strtoupper($bairro);

$cidade = $row['cidade'];

$cidade = mb_strtoupper($cidade);

$estado = $row['estado'];

$estado = mb_strtoupper($estado);
}

$pesquisa2 = $conn->query("select * from dependentes where id_func='$id_func'");

while($row = $pesquisa2->fetch_assoc()) 
{
	$nome_filho = $row['nome'];
	$nasc_filho = $row['data_nasc'];
	$nasc_filho = implode("/",array_reverse(explode("-",$nasc_filho)));

	$lista ='<strong>Dependente: </strong>'.$nome_filho.'&nbsp;&nbsp;&nbsp;<strong>Data de Nasc:</strong> '.$nasc_filho.'<br>';
}

$datax=date('d_m_Y').$nome_func;

				


				$logo="<img src='http://192.168.151.24/sisrh2/img/logo-procape.png'>
					   <img id='upe' src='http://192.168.151.24/sisrh2/img/logo.upe.png'>";

				
				$data_hoje=date('d/m/Y');
				$cabecalho="
				<h3>Relatório de Dados Pessoais<br>
				Recife, ".$data_hoje."
				</h3><hr>";

				$corpo="
                <p><strong>Nome Completo: </strong>$nome_func<br>
				<strong>Data Nasc: </strong>$data_nasc<br>
				<strong>CPF: </strong>$cpf_func<br>
				<strong>RG: </strong>$rg_func<br>
				<strong>Cartão SUS: </strong>$sus<br>
				<strong>Prontuário Procape: </strong>$pront<br>
				<strong>Tipo Sanguíneo: </strong>$tipo_sang<br>
				<strong>E-mail: </strong>$email_func<br>
				<strong>Celular: </strong>$cel<br>
				<strong>Conjuge: </strong>$nome_conjugue<br>
				<strong>Nome da Mãe: </strong>$nome_mae<br>
				<strong>Nome do Pai: </strong>$nome_pai<br>
				<strong>Estado Civil: </strong>$estado_civil<br>
				<strong>Escolaridade: </strong>$escolaridade<br>
				<strong>CEP: </strong>$cep<br>
				<strong>Endereço: </strong>$logradouro<br>
				<strong>Bairro: </strong>$bairro<br>
				<strong>Nacionalidade: </strong>$nacionalidade<br>
				<strong>Estado: </strong>$estado<br>
				<strong>Cidade: </strong>$cidade<br>$lista";

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