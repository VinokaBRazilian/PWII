<?php include "cabecalho.php"; ?> <!-- Inclui o arquivo 'cabecalho.php', provavelmente responsável pelo cabeçalho da página -->

<?php

    // Condição que irá verificar se as variáveis 'login' e 'senha' existem no formulário enviado
    if (isset($_POST["login"]) && isset($_POST["senha"])) {

        // Verifica se o campo 'login' está vazio
        if (empty($_POST["login"])) {
            // Exibe uma mensagem de erro caso o campo esteja em branco
            echo "<br><div class='alert alert-danger'>Campo Nome não pode estar em branco!</div>";
        }
        
        // Verifica se o campo 'senha' está vazio
        else if (empty($_POST["senha"])) {
            // Exibe uma mensagem de erro caso o campo esteja em branco
            echo "<br><div class='alert alert-danger'>Campo Senha não pode estar em branco!</div>";
        }
        
        // Se ambos os campos estiverem preenchidos, prossegue para salvar os dados no banco de dados
        else {
            include "conexao.php"; // Inclui o arquivo de conexão com o banco de dados

            // Armazena os valores de 'login' e 'senha' recebidos via POST
            $login = $_POST["login"];
            $senha = $_POST["senha"];
            
            // Cria a query de inserção no banco de dados
            $query = "INSERT INTO usuarios (LOGIN, SENHA, ATIVO) VALUES ('$login', '$senha', 1)";

            // Executa a query e armazena o resultado
            $resultado = $conexao->query($query);

            // Verifica se a inserção foi bem-sucedida
            if ($resultado) {
                // Exibe uma mensagem de sucesso
                echo "<div class='alert alert-success'>Salvo no Banco com sucesso!</div>";
            } else {
                // Exibe uma mensagem de erro em caso de falha
                echo "<div class='alert alert-danger'>Ocorreu algum erro ao salvar!</div>";
            }

            // Lógica para salvar no banco de dados já foi executada aqui
        }
    }

    // Caso as variáveis 'login' e 'senha' não existam, inicializa as mesmas como strings vazias
    else {
        $login = "";
        $senha = "";
    }

?>

<div class="row">

    <div class="col-4"></div> <!-- Div vazia para centralizar o conteúdo no meio da página -->

    <div class="col-4">
        <div class="card">
            <div class="card-header">
                <!-- Título do formulário -->
                Novo Cadastro
            </div>
            <div class="card-body">
                <!-- Formulário para cadastrar novo usuário, usando o método POST para enviar os dados -->
                <form action="novo_usuario.php" method="post">

                    <!-- Campo para inserir o login -->
                    <label>Digite um nome de Usuario</label>
                    <input scope="row" class="form-control" type="text" name="login" value="<?php echo $login; ?>"/>
                    <br>

                    <!-- Campo para inserir a senha -->
                    <label>Crie uma Senha</label>
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
