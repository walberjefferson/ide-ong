<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Enviando...</title>
    <meta charset="utf-8">
</head>
<body>


<?php

require_once "valida-cnpj.php";

if (!valida_cnpj($_POST['cnpj'])) : ?>

    <script type="text/javascript">
        /*Página de retorno após envio*/
        alert('CNPJ Inválido!');

        window.location = "doacao_juridica.php";
    </script>

<?php
else :
if (!empty($_POST['ciente']) and !empty($_POST['nome']) and !empty($_POST['email']) and !empty($_POST['mensagem'])) :

$valor = $_POST['valor'];

if ($valor == 'outro') {
    $valor = $_POST['outro'];
}
$nome = $_POST['nome'];
$razao = $_POST['razao'];
$cnpj = $_POST['cnpj'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];
$uf = $_POST['uf'];
$cidade = $_POST['cidade'];
$mensagem = $_POST['mensagem'];


$assunto = "(Doação Pessoa Jurídica - IDE)";

/* Pegar dados do formulário via método post */
//$mailDestino = "contato@v2i.com.br";
$mailDestino = "monica@lumenagencia.com.br";
$mailDeEnvio = "'IDE Projetos Sociais' <naoresponda@lumenagencia.com.br>";


// Ã necessÃ¡rio indicar que o formato do e-mail Ã© html
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
$headers .= "From: $mailDeEnvio";
//$headers .= "Bcc: $EmailPadrao\r\n";


/* Conteudo do email */
$conteudo = ("

		<h2>Mensagem:</h2>
		<table style='width: 100%; border: 1px solid #E4E2E2;'>
			<tr style='background: #E4E2E2'>
				<td style='width: 30%; padding: 5px;'><b>Nome:</b></td>
				<td style='width: 69%; padding: 5px;'> $nome </td>
			</tr>
			<tr>
				<td style='width: 30%; padding: 5px;'><b>Razão Social:</b></td>
				<td style='width: 69%; padding: 5px;'> $razao </td>
			</tr>
			<tr style='background: #E4E2E2'>
				<td style='padding: 5px;'><b>CNPJ:</b></td>
				<td style='padding: 5px;'>$cnpj</td>
			</tr>
			<tr>
				<td style='padding: 5px;'><b>E-mail:</b></td>
				<td style='padding: 5px;'>$email</td>
			</tr>
			<tr style='background: #E4E2E2'>
				<td style='padding: 5px;'><b>Telefone:</b></td>
				<td style='padding: 5px;'>$telefone</td>
			</tr>
			<tr>
				<td style='padding: 5px;'><b>Celular:</b></td>
				<td style='padding: 5px;'>$celular</td>
			</tr>
			<tr style='background: #E4E2E2'>
				<td style='padding: 5px;'><b>Endereço:</b></td>
				<td style='padding: 5px;'>$endereco</td>
			</tr>
			<tr>
				<td style='padding: 5px;'><b>Número:</b></td>
				<td style='padding: 5px;'>$numero</td>
			</tr>
			<tr style='background: #E4E2E2'>
				<td style='padding: 5px;'><b>Bairro:</b></td>
				<td style='padding: 5px;'>$bairro</td>
			</tr>
			<tr>
				<td style='padding: 5px;'><b>Cidade:</b></td>
				<td style='padding: 5px;'>$cidade</td>
			</tr>
			<tr style='background: #E4E2E2'>
				<td style='padding: 5px;'><b>Estado:</b></td>
				<td style='padding: 5px;'>$uf</td>
			</tr>
			<tr>
				<td style='padding: 5px;'><b>CEP:</b></td>
				<td style='padding: 5px;'>$cep</td>
			</tr>
			<tr style='background: #E4E2E2'>
				<td style='padding: 5px;'><b>Valor Doação:</b></td>
				<td style='padding: 5px;'>$valor</td>
			</tr>
			<tr>
				<td style='padding: 5px;'><b>Mensagem:</b></td>
				<td style='padding: 5px;'>$mensagem</td>
			</tr>
		</table>
		");

@mail($mailDestino, $assunto, $conteudo, $headers);

?>

    <script type="text/javascript">
        /*Página de retorno após envio*/
        alert('Mensagem enviada com sucesso.');

        window.location = ".";
    </script>

<?php else : ?>
    <script type="text/javascript">
        /*Página de retorno após envio*/
        alert('Mensagem não enviada!.');

        window.location = "doacao_juridica.php";
    </script>
<?php endif;
endif; ?>

</body>
</html>

