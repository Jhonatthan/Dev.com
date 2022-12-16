<?php

    Class conexao{
//----------------------------------------------------AREA CONEXÃO DB-----------------------------------------------------------        
        private $conn;
            //criando conexão com banco de dados
        public function __construct(){
            global $conn;
            try{
            $conn = new PDO("mysql:host=localhost;dbname=dev", "root", "");
            }catch(PDOException $err){
                echo "ERRO de bacno de dados:" . $err->getMessage();
            }catch(Exception $err){
                echo "ERRO" . $err->getMessage();
            }
        }
//---------------------------------------------------------AREA DO CLIENTE-----------------------------------------------------
        public function add_cliente($nome, $fone, $cpf, $email, $senha){
            global $conn;

            $sql = $conn->query("SELECT id FROM cliente WHERE email = '$email'");
            if($sql->rowCount() > 0){
                return false;
            }else{
                $sql = $conn->query("INSERT INTO cliente VALUES (null, '$nome', '$fone', '$cpf', '$email', '$senha')");
                return true;
            }
        }

        public function logar_cliente($email, $senha){
            global $conn;
            $sql = $conn->query("SELECT id FROM cliente WHERE email = '$email' AND senha = '$senha'");
            if($sql->rowCount() > 0){
                $dados = $sql->fetch();
                session_start();
                $_SESSION['id'] = $dados['id'];
                return true;
            }else{
                return false;
            }
        }

        

//-------------------------------------------AREA DO VENDEDOR-----------------------------------------------------        

        public function add_vendedor($nome, $fone, $cpf, $email, $senha){
            global $conn;
                $res = $conn->query("INSERT INTO vendedor VALUES (null, '$nome', '$fone', '$cpf', '$email', '$senha')");
                return true;
        }

        public function logar_vendedor($email, $senha){
            global $conn;
            $sql = $conn->query("SELECT id FROM vendedor WHERE email = '$email' AND senha '$senha'");
            if($sql->rowCount() > 0){
                $dados = $sql->fetch();
                session_start();
                $_SESSION['email_vendedor'] = $dados['email'];
                return true;
            }else{
                return false;
            }
        }

//-----------------------------------------------AREA DE PRODUTOS--------------------------------------------------

        public function add_produto($nome, $desc, $valor, $img){
            global $conn;
            $conn->query("INSERT INTO produtos VALUES (null, '$nome', '$desc', '$valor', '$img')");
        }

        public function remove_produto($id){
            global $conn;
            $conn->query("DELETE FROM produtos WHERE id = '$id'");
        }
    }
