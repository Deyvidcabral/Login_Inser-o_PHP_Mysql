<?php
	require_once '../conexao/conexao.php';
        class LoginDAO{

	public function cadastra($email,$login,$senha){
                
        $conn = new conexao();  
        $mysqli = $conn->getconexao();
        $senhamd5 = md5(md5($senha));
        
        $sql_code = "Insert into usuarios (email,login,senha) VALUES  (' ".$email."','".$login. "','".$senhamd5."')";
        $sql_query = $mysqli->query($sql_code) or die($mysqli->error);
	}	
}