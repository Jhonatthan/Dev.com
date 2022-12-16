<?php
        session_start();
        if(!isset($_SESSION['id'])){
            header("location: logar.php");
            exit;
        }

    include_once "php/heade.php";
    include_once "php/body_topo.php";

    if(!empty($_GET['cd'])){
            //por o id do produto na variavel

            $cd_prod=$_GET['cd'];
            //se a sessão do carrinho não está iniciada

            if(!isset($_SESSION['carrinho'])){
                $_SESSION['carrinho'] = array(); // iniciar sessão
            }
        

        //se a sessão do carrinho + codigo do produto não está iniciada 
        if(!isset($_SESSION['carrinho'][$cd_prod])){
            // iniciar sessão
            $_SESSION['carrinho'] [$cd_prod] = 1;
        }else{
            $_SESSION['carrinho'] [$cd_prod] += 1;
        }
                //após adicionar os produtos mostrar carrinho
            include "php/area_do_carrinho.php";
    }else{
            // caso não haja produtos mostrar carrinho vazio
            include "php/area_do_carrinho.php";
    } 

    include_once "php/footer.php";
?>