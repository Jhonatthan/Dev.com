<section id="conteudo">
    <?php
        if($_SESSION['carrinho'] == 0){

        }else{
        $total = null;
    
        foreach ($_SESSION['carrinho'] as $cd => $qnt){
            $use = $conn->query("SELECT * FROM produtos WHERE codigo = '$cd'");
            $exibe = $use->fetch(PDO::FETCH_ASSOC);

            $produto = $exibe['nome'];
            $preco = $exibe['valor'];
            $total += $exibe['valor'] * $qnt;
        ?>
                            <table>
                                <tr>
                                    <td rowspan="2" class="img_esquerda">
                                        <div class="img"><img src="img/produtos/<?php echo $exibe['img']?>" alt="<?php echo $produto?>"></div>
                                    </td>                   
                                     <td colspan="5" class="img_direita">
                                            <h2><?php echo $produto ?></h2>
                                    </td>
                                </tr>
                                <tr>    
                                    <td colspan="5">                                        
                                        <?php echo $exibe['descricao'];?> 
                                    </td>
                                </tr>
                                <tr> 
                                </tr>
                                <tr>    
                                    <td style="width: 20%;">
                                        <a href="carrinho.php?<?php $qnt -1?>">
                                            <div style="width: 3em;" class = "retitem">-</div>
                                        </a>
                                    </td>
                                    <td style="width: 20%;">
                                        <?php echo $qnt;?>
                                    </td>
                                    <td style="width: 20%;">                                        
                                        <?php echo "R$ " . ($qnt * $preco) . ",00";  ?> 
                                    </td>
                                    <td style="width: 20%;">
                                        <a href="carrinho.php?cd=<?php echo $cd;?>">
                                            <div style="width: 3em;" class = "additem">+</div>
                                        </a>
                                    </td>
                                    <td style="width: 20%;">
                                        <a href="php/removecarrinho.php?cd=<?php echo $cd;?>">
                                            <div style="width: 3em;" class = "removeitem">x</div>
                                        </a>
                                    </td>
                                </tr>
                            </table>

        <?php 
            }
        ?>            

            <div class="carrinho">
                <?php 
                if(empty($qnt)){
                    echo "<h2>Itens: 0 Total a ser pago: R$ " . number_format($total,2,',','.') . "</h2>";
                }else{
                    echo "<h2>Itens: " . $qnt . " Total a ser pago: R$ " . number_format($total,2,',','.') . "</h2>";
                }
                ?>
            </div>
            <nav class="btn">
                <a href="index.php">
                    <button class="cc">
                        CONTINUAR COMPRANDO
                    </button>
                </a>
                <a href="carrinho.php">
                    <button class="fn">
                       FINALIZAR COMPRA
                    </button>
                </a>                
            </nav>    
    <?php 
        }
    ?>
</section>    