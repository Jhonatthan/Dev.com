        <?php
        if(isset($_POST['submit_cli'])){
            $login = addslashes($_POST['email_cli']);
            $senha = addslashes($_POST['senha_cli']);

            if(!empty($login) && !empty($senha)){
                if($use->logar_cliente($login, $senha)){
                    header("location: index.php");
                    return true;
                }else{
                    ?>
                    <div class="msg_ncor">
                        <?php echo "E-mail de cliente não cadastrado! <a href='cadastro.php'>Cadastre-se</a>";?>
                    </div>
                    
                    <?php  
                }
            }
        }
        
        ?>



<section class="cont">
            <form method="POST" class="centro">
                <h2>É nosso cliente?</h2>
                <label for="email">Login:</label>
                    <input type="email" name="email_cli" id="email_cli" placeholder="E-mail" required>               
                <label for="senha">Senha:</label>
                    <input type="password" name="senha_cli" id="senha_cli" maxlength="11" placeholder="Senha" required></br>
                        <input type="submit" name="submit_cli" value="Logar" id="Logar_cli">
            </form>
            
            <form method="POST" class="centro">
                <h2>É um vendedor?</h2>
                <label for="email">Login:</label>
                    <input type="email" name="email_ven" id="email_ven" placeholder="E-mail" required>               
                <label for="senha">Senha:</label>
                    <input type="password" name="senha_ven" id="senha_ven" maxlength="11" placeholder="Senha" required></br>
                        <input type="submit" name="submit_ven" value="Logar" id="Logar_ven">
            </form>
</section>