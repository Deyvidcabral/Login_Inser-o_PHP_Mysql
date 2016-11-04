<?php

    
    require_once '../Conexao/conexao.php';

    if(($_POST['login']) == null){
        echo  "Null para login". $_POST['login'];
    }
    if(($_POST['senha']) == null){
        echo  "Null para senha" . $_POST['senha'];
    }

        $conn = new conexao();
        $mysqli = $conn->getconexao();


    if(isset($_POST['login'])  && strlen($_POST['login'])>0){
        if(!isset($_SESSION)){
        session_start();    


                //$mysqli->escape_string
        $_SESSION['login'] = $mysqli->escape_string($_POST['login']);
        $_SESSION['senha'] = md5(md5($_POST['senha']));
        }
//if(isset($_POST['pass'])
        $sql_code = "Select senha, id from usuarios where login = '" . $_SESSION['login'] ." ' ";
        $sql_query = $mysqli->query($sql_code) or die($mysqli->error);
        $dado = $sql_query->fetch_assoc();
        $total = $sql_query->num_rows;

        
        if($total == 0){
            echo "POnto 1 ". $_POST['login'];  
            $erro[] = "Este erro não pertence a nenhum usuário";
        }else{
            if($dado['senha'] == $_SESSION['senha']){
                        $_SESSION['login'] = $dado['id'];
                    echo"Session efetuada";
                                echo"<script>
                                alert('Login efetuado com sucesso');
                                location.href='./../../paginas/sucesso.php';
                                </script>";
            }else{
                $erro[] = "Senha Incorreta";
            }
        }
        
        if(count($erro) > 0 ){
            foreach($erro as $msg){
            echo"<p>$msg</p>";  
            }
        } else {
            echo"<br> Erro de acesso 2 ";
        }
    } else {              
         echo"<br> Erro de acesso 1";
    }