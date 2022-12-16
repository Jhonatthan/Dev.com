        <?php
            if(isset($_POST['nome_cli'])){
                $nome = addslashes($_POST['nome_cli']); 
                $tel = addslashes($_POST['tel_cli']);
                $cpf = addslashes($_POST['cpf_cli']);
                $email = addslashes($_POST['email_cli']);
                $conf_email = addslashes($_POST['conf_email_cli']);
                $senha = addslashes($_POST['senha_cli']);
                $conf_senha = addslashes($_POST['conf_senha_cli']);
                
                if(!empty($nome) && !empty($tel) && !empty($cpf) && !empty($email) && !empty($senha)){
                    //função cadastrar
                    if($email == $conf_email && $senha == $conf_senha){
                        if($use->add_cliente($nome, $tel, $cpf, $email, $senha)){
                        ?>
                            <div class="msg_ok">
                                <?php echo "E-mail cadastrado com sucesso!";?>
                            </div>
                        <?php  
                        }else{
                            ?>
                            <div class="msg_ncor">
                                <?php echo "E-mail já cadastrado!";?>
                            </div>
                            <?php  
                        }
                    }else if($email != $conf_email){
                        ?>
                        <div class="msg_ncor">
                            <?php echo "E-mail's não correspondem!";?>
                        </div>
                        <?php  
                    }else if($senha != $conf_senha){
                        ?>
                        <div class="msg_ncor">
                            <?php echo "Senhas não correspondem!";?>
                        </div>
                        <?php  
                    }
                }
            }
        ?>
                
        <?php
            if(isset($_POST['submint_ven'])){
                $nome = addslashes($_POST['nome_ven']); 
                $tel = addslashes($_POST['tel_ven']);
                $cpf = addslashes($_POST['cpf_ven']);
                $email = addslashes($_POST['email_ven']);
                $conf_email = addslashes($_POST['conf_email_ven']);
                $senha = addslashes($_POST['senha_ven']);
                $conf_senha = addslashes($_POST['conf_senha_ven']);
                
                if(!empty($nome) && !empty($tel) && !empty($cpf) && !empty($email) && !empty($senha)){
                    //função cadastrar
                    if($email == $conf_email && $senha == $conf_senha){
                        if($use->add_vendedor($nome, $tel, $cpf, $email, $senha)){
                            ?>
                                <div class="msg_ok">
                                    <?php echo "E-mail cadastrado com sucesso!";?>
                                </div>
                            <?php  
                        }else{
                            ?>
                            <div class="msg_ncor">
                                <?php echo "E-mail já cadastrado!";?>
                            </div>
                            <?php  
                        }
                        }else if($email != $conf_email){
                            ?>
                            <div class="msg_ncor">
                                <?php echo "E-mail's não correspondem!";?>
                            </div>
                            <?php  
                        }else if($senha != $conf_senha){
                            ?>
                            <div class="msg_ncor">
                                <?php echo "Senhas não correspondem!";?>
                            </div>
                            <?php  
                        }
                }
                }
        ?>
        
        <section class="cont">
            <form method="POST" class="esquerda">
                <h2>Quer ser nosso cliente?</h2>
                <label for="nome">Nome:</label>
                    <input type="text" name="nome_cli" id="nome_cli" placeholder="Nome Completo" required>
                <label for="tel">Telefone:</label>
                    <input type="text" name="tel_cli" id="tel_cli" placeholder="00 0 00000000" maxlength="11" required>                
                <label for="cpf">CPF:</label>
                    <input type="text" name="cpf_cli" id="cpf_cli" placeholder="CPF" maxlength="11" required>               
                <label for="email">E-mail:</label>
                    <input type="email" name="email_cli" id="email_cli" placeholder="E-mail" required>               
                <label for="conf_email">Confirmar E-mail:</label>
                    <input type="email" name="conf_email_cli" id="conf_email_cli" placeholder="Confirmar E-mail" required>                
                <label for="senha">Senha:</label>
                    <input type="password" name="senha_cli" id="senha_cli" maxlength="11" placeholder="Digite 8 caracteres" required>                
                <label for="conf_senha">Confirmar Senha:</label>
                    <input type="password" name="conf_senha_cli" id="conf_senha_cli" maxlength="11" placeholder="Digite 8 caracteres" required></br>
                        <input type="submit" name="submint_cli" value="Salvar" id="salvar_cli">
            </form>

            <form method="POST" class="esquerda">
                <h2>Quer ser um vendedor?</h2>
                <label for="nome">Nome:</label>
                    <input type="text" name="nome_ven" id="nome_ven" placeholder="Nome Completo" required>
                <label for="tel">Telefone:</label>
                    <input type="text" name="tel_ven" id="tel_ven" placeholder="00 0 00000000" maxlength="11" required>                
                <label for="cpf">CPF:</label>
                    <input type="text" name="cpf_ven" id="cpf_ven" placeholder="CPF" maxlength="11" required>               
                <label for="email">E-mail:</label>
                    <input type="email" name="email_ven" id="email_ven" placeholder="E-mail" required>               
                <label for="conf_email">Confirmar E-mail:</label>
                    <input type="email" name="conf_email_ven" id="conf_email_ven" placeholder="Confirmar E-mail" required>                
                <label for="senha">Senha:</label>
                    <input type="password" name="senha_ven" id="senha_ven" maxlength="11" placeholder="Digite 8 caracteres" required>                
                <label for="conf_senha">Confirmar Senha:</label>
                    <input type="password" name="conf_senha_ven" id="conf_senha_ven" maxlength="11" placeholder="Digite 8 caracteres" required></br>
                        <input type="submit" name="submint_ven" value="Salvar" id="salvar_ven">
            </form>
        </section>