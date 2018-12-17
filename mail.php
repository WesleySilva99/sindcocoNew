<?php

include "util/conexao.php";

if (isset($_POST["nome"])){
$email = "sindcoco@ig.com.br";

$nome_ = $_POST['nome'];
$email_ = $_POST['email'];
$fone_ = $_POST['telefone'];
$cidade_ = $_POST['cidade'];
//$assunto_ = $_POST['assunto'];
$msg_ = preg_replace("/(\\r)?\\n/i", "<br/>",$_POST['mensagem']);

$headers = "From: Contato - SINDCOCO <contato@sindcoco.com.br> \r\n";
$headers.= "Content-Type: text/html; charset=ISO-8859-1 ";
$headers .= "MIME-Version: 1.0 ";
$mensagem ="<body>
<div style='border: 1px solid #EBEBEB; height:auto; width:571px; text-align:center; color:#000000; font-size:12px; font-family:Arial, Helvetica, sans-serif; border-bottom:6px solid #454545'>
	<div style='margin-bottom:10px; height:12px; background:#454545'>
		
	</div>
<div style='color:#454545; font-size:14px; font-weight:bold;'>CONTATO</div>
<p style='text-align:left;padding-left:10px;margin-bottom:0px'><b>Nome:</b> ".$nome_."</p>
<p style='text-align:left;padding-left:10px;margin-top:4px;'><b>E-mail:</b> ".$email_."</p>
<p style='text-align:left;padding-left:10px;margin-top:4px;'><b>Telefone:</b> ".$fone_."</p>
<p style='text-align:left;padding-left:10px;margin-top:4px;'><b>Cidade:</b> ".$cidade_."</p>

<p style='text-align:left;padding-left:10px'>
<b>Mensagem:</b><br />".$msg_."<br /><br />
<a href='http://www.sindcoco.com.br/' style='display:block; text-align:center; text-decoration:none; color:#FF3300;'><b>www.sindcoco.com.br</b></a>
</p>
</div>
</body>";

mail($email, "CONTATO - SINDCOCO", $mensagem, $headers);

echo "<script>alert('Mensagem enviada com sucesso!');
					window.location='/'</script>";
}
?>
