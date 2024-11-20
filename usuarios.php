<?php include "cabecalho.php"; ?> <!-- Inclui o arquivo 'cabecalho.php', provavelmente responsável pelo cabeçalho da página -->

<?php

if(empty($_POST['login']) && empty($_POST['senha'])
)
{

$login = null;
$senha = null;

}
else
if (isset($_POST["login"]) && isset($_POST["senha"])) {
    $login = $_POST["login"];
    $senha = $_POST["senha"];

    include "conexao.php";

    // Query para buscar login e senha diretamente
    $sql = "SELECT login, senha FROM usuarios WHERE login = '$login' AND senha = '$senha'";
    $result = $conexao->query($sql);    

    // Verifica se existe um registro com as credenciais fornecidas
    if ($result->num_rows > 0) {       
        header("Location: permissao.php");
        exit();
    } else {
        // Credenciais incorretas
        echo "<br><div class='alert alert-danger'>Usuário ou senha incorretos, tente novamente!</div>";
    }
}
   else
        {
            
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
        <br>
        <br>
                    <a href="novo_usuario.php">Não tem cadastro?</a>
                </form>
            </div>
        </div>
    </div>

    <div class="col-4"></div> <!-- Outra div vazia para centralizar -->
</div>

<?php include "rodape.php"; ?> <!-- Inclui o arquivo 'rodape.php', provavelmente responsável pelo rodapé da página -->
