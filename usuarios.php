<?php include "cabecalho.php"; ?> <!-- Inclui o arquivo 'cabecalho.php', provavelmente responsável pelo cabeçalho da página -->

<?php

    // Condição que irá verificar se as variáveis 'login' e 'senha' existem no formulário enviado
    if (isset($_POST["login"]) && isset($_POST["senha"]))
    {

        if(empty($_POST["login"]) || empty($_POST["senha"]))
        {
            echo "<br><div class='alert alert-danger'>Os campos login e senha não podem ficar em branco!</div>";
        }
        else
        {    
        $login = $_POST["login"];
        $senha = $_POST["senha"];

        $loginR = "SELECT  "    

        }
    }

?>

<div class="row">

    <div class="col-4"></div> <!-- Div vazia para centralizar o conteúdo no meio da página -->

    <div class="col-4">
        <div class="card">
            <div class="card-header">
                <!-- Título do formulário -->
                Login
            </div>
            <div class="card-body">
                <!-- Formulário para cadastrar novo usuário, usando o método POST para enviar os dados -->
                <form action="usuarios.php" method="post">

                    <!-- Campo para inserir o login -->
                    <label>Nome</label>
                    <input scope="row" class="form-control" type="text" name="login" value="<?php echo $login; ?>"/>
                    <br>

                    <!-- Campo para inserir a senha -->
                    <label>Senha</label>
                    <input scope="row" class="form-control" type="text" name="senha" value="<?php echo $senha; ?>"/>
                    <br>
                    
                    <!-- Botão de envio do formulário -->
                    <button type='submit' class='btn btn-success'>
                        Enviar os Dados
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-4"></div> <!-- Outra div vazia para centralizar -->
</div>

<?php include "rodape.php"; ?> <!-- Inclui o arquivo 'rodape.php', provavelmente responsável pelo rodapé da página -->
