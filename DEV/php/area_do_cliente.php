<?php
    if(!isset($_SESSION['id'])){
        header("location: logar.php");
        exit;
    }

?>
<section id="conteudo">
            <?php
                if(!empty($_SESSION['id'])){
                    $cons_usu = $conn->query("SELECT nome FROM cliente WHERE '$_SESSION[id]'= id");
                    $exibe_usu = $cons_usu->fetch(PDO::FETCH_ASSOC);
                    echo "<h3> Bem vindo ". $exibe_usu['nome'] . " | <a href='sair.php'> Sair </a> </h3>";
                }
                $sql = 'SELECT * FROM produtos';
                if ($res=mysqli_query($con, $sql)){
                    $nome_prod = array();
                    $link_prod = array();
                    $desc_prod = array();
                    $i = 0;
                    while ($reg=mysqli_fetch_assoc($res)){
                        $id_prod[$i] = $reg['codigo'];
                        $nome_prod[$i] = $reg['nome'];
                        $desc_prod[$i] = $reg['descricao'];
                        $img_prod[$i] = $reg['img'];
                        $valor_prod[$i] = $reg['valor'];
                        ?>
                            <table>
                                <tr>
                                    <td rowspan="2" class="img_esquerda">
                                        <div class="img"><img src="img/produtos/<?php echo $img_prod[$i]?>" alt="<?php echo $nome_prod[$i] ?>"></div>
                                    </td>                   
                                     <td colspan="3" class="img_direita">
                                            <h2><?php echo $nome_prod[$i] ?></h2>
                                    </td>
                                </tr>
                                <tr>    
                                    <td>                                        
                                        <?php echo $desc_prod[$i]?> 
                                    </td>
                                    <td>                                        
                                        <?php echo "R$ " . $valor_prod[$i] . ",00"?> 
                                    </td>
                                    <td>
                                        <a href="carrinho.php?cd=<?php echo $id_prod[$i];?>">
                                            <div class = "additem">+</div>
                                        </a>
                                    </td>
                                </tr>

                            </table>
                        
                        <?php
                        $i++;
                    }
                }
            ?>
        </section>