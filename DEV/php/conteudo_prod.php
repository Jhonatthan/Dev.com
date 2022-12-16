        <?php
        if(isset($_POST['submit'])){
            $nome = addslashes($_POST['nome']); 
            $desc = addslashes($_POST['desc']);
            $valor = addslashes($_POST['valor']);
            $nimg = $_FILES['file'];
            $img = $nimg['name'];
            if(!empty($nome) && !empty($desc) && !empty($valor)){
                //função cadastrar                
                $use->add_produto($nome, $desc, $valor, $img);
                $nome_img = explode('.',$nimg['name']); 
                if($nome_img[sizeof($nome_img)-1] != 'jpg'){
                    die;
                }else{
                    move_uploaded_file($nimg['tmp_name'],'img/produtos/'.$nimg['name']);
                }
                ?>
                <div class="msg_ok">
                    <?php echo "Produto cadastrado com sucesso!";?>
                </div>
                <?php  
            }else{
                return false;
            }
        }
        ?>
        <section class="cont">
            <form action="produtos.php" method="POST" enctype="multipart/form-data">
                <h2>Adicionar Produto</h2>
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" placeholder="Nome do Produto" required>
                <label>Descrição:</label>
                <textarea name="desc" id="desc" cols="40" rows="5" placeholder="Descrição do produto"></textarea>
                <label for="valor">Valor: R$</label>
                <input type="number" name="valor" id="valor" required>
                <label for="img">Imagem:</label>
                <input type="file" name="file" id="img" required>
                <input type="submit" name="submit" value="Salvar" id="salvar">
            </form>
        </section>