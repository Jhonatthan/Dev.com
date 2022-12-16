<?php
    session_start();
    if(isset($_SESSION['id'])){
        include_once 'area_do_cliente.php';
    }else{
        ?>
        <section id="conteudo">
            <?php
                $sql = 'SELECT * FROM produtos';
                if ($res=mysqli_query($con, $sql)){
                    $nome_prod = array();
                    $link_prod = array();
                    $desc_prod = array();
                    $i = 0;
                    while ($reg=mysqli_fetch_assoc($res)){
                        $nome_prod[$i] = $reg['nome'];
                        $desc_prod[$i] = $reg['descricao'];
                        $img_prod[$i] = $reg['img'];
                        ?>
                        <a href="logar.php">
                            <table>
                                <tr>
                                    <td rowspan="2" class="img_esquerda">
                                        <div class="img"><img src="img/produtos/<?php echo $img_prod[$i]?>" alt="<?php echo $nome_prod[$i] ?>"></div>
                                    </td>                   
                                     <td colspan="2" class="img_direita">
                                            <h2><?php echo $nome_prod[$i] ?></h2>
                                    </td>
                                </tr>
                                <tr>    
                                    <td>                                        
                                        <?php echo $desc_prod[$i]?> 
                                    </td>
                                </tr>

                            </table>
                        </a>    
                        
                        <?php
                        $i++;
                    }
                }
            ?>
        </section>
        
        
        <?php
    }
?>
