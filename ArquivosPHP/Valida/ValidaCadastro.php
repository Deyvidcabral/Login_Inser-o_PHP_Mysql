<?php
	require_once '../DAO/LOGINDAO.php';



	if(isset($_POST['email'])){
		echo "<p>passou 1 " . $_POST['login'];
	}
	if(strlen($_POST['login'])>0){
		echo "<p>passou 2 ". $_POST['senha'];
	}


	if(isset($_POST['email'])  && (strlen($_POST['email']))>0){
		if(isset($_POST['login']) && (strlen($_POST['login']))>0){
			if (isset($_POST['senha']) && (strlen($_POST['senha']))>0) {
				if($_POST['senha'] == $_POST['senhaconfirma']){
                    $dao = new LoginDAO();
					$dao->cadastra($_POST['email'],$_POST['login'],$_POST['senha']);		
				}else{
					echo "<p>Senhas Diferentes</p>";
				}
			}else{
				echo"<p> Senha inválida</p>";
			}
		}else {
			echo"<p> Login inválido</p>";
		}

	}else  {
		echo"<p> E-mail inválido";
	}

            