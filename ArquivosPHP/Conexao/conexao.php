<?php

class conexao{

	public function getconexao(){
		$host = "localhost";
		$user = "root";
		$pass = "Bateria49m@x";
		$db = "db_testelogin";

		$mysqli = new mysqli($host, $user, $pass ,$db)  or die ("falha na conexão");
                $host2 = $host;
                $mysqli->set_charset('utf8');
                return $mysqli;
	   
	   	if (!$mysqli) {
            die('Could not connect:' . mysqli_error());
            } else {
            echo 'Connected successfully';
		}
    }
    public function teste(){
        $host ='local';
        $externo = 'externo';
        return $local;
    }
}