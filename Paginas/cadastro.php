<html>
<TITLE>Pagina de Cadastro</TITLE>
<HEAD>
	<meta stylesheet="../css/materialize.css">
</HEAD>
<body>
	<header>
	</header>	
	<NAV>
		<form method="post" action = "../ArquivosPHP/Valida/ValidaCadastro.php">
			<p>E-mail: <input id= "email" name ="email" value="email" placeholder="email" type=text ></p>
			<p>Login: <input id="login" name="login" value="login" placeholder="login" type=text></p>
			<p>Senha: <input id="senha" name="senha" value="senha" type="password"></p>
			<P>Digite a senha novamente:<input id="senhaconfirma" name="senhaconfirma" value="" type="password" oninput="validaSenha(this)"></p>
			<input value="cadastrar" type="submit">	
		</form>		
	</NAV>
	<footer></footer>
</body>
</html>

	<script>
		function validaSenha (input){ 
    	if (input.value != document.getElementById('senha').value) {
    	input.setCustomValidity('Repita a senha corretamente');
  		} else {
    	input.setCustomValidity('');
  		}
		} 
	</script>
