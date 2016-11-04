<html>
<TITLE>Login Efetuado</TITLE>
<body>
<?php
echo "aqui".$_SESSION['login'];
if (isset($_SESSION['login'])){
echo"	
	<nav align='center'>
	<p>Login Efetuado com sucesso</p>
	</nav>
	";

} else {
	echo "
	<nav align='center'>
	<script> alert('O Login precissa ser realizado');
	<p><a href='../index.html'>Voltar</a></p>
	</script>
	</nav>
	";
	
}
?>
</body>	
</html>