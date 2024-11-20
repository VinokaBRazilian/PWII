<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página inicial</title>
    <!-- Incluindo a folha de estilos CSS -->
    <link href="estilo.css" rel="stylesheet" />
</head>
<body>

<!-- Navbar: Barra de navegação no topo -->
<nav class="navbar navbar-expand-lg" style="background-color: #000; color: #fff; width: 100%;">
  <div class="container-fluid">
    <!-- Logo da navbar -->
    <a class="navbar-brand" href="#" style="color: #fff;">PW II</a>
    <!-- Botão para mostrar o menu em telas menores -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" style="color: #fff;"></span>
    </button>
    <!-- Links de navegação -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="width: 100%;>
        <!-- Link para a página inicial -->
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php" style="color: #fff;">Página Inicial</a>
        </li>
        <!-- Link para a página de variáveis -->
        <li class="nav-item">
          <a class="nav-link" href="variavel.php" style="color: #fff;">Variáveis</a>
        </li>
        <!-- Link para a página de condições -->
        <li class="nav-item">
          <a class="nav-link" href="if.php" style="color: #fff;">Condições</a>
        </li>
        <!-- Link para a página de funções -->
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="function.php" style="color: #fff;">Funções</a>
        </li>
        <!-- Menu dropdown para funções de repetição -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #fff;">
            Funções de Repetição
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="while.php">While</a></li>
            <li><a class="dropdown-item" href="for.php">For</a></li>            
            <li><a class="dropdown-item" href="array.php">Foreach</a></li>
          </ul>
        </li>           
        <!-- Menu dropdown para o menu Loja -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #fff;">
            Loja
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="usuarios.php">Usuário</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="produtos.php">Produtos</a></li>
            <li><a class="dropdown-item" href="categorias.php">Categorias</a></li>
          </ul>
        </li>
      </ul>
      <!-- Formulário de pesquisa -->
      <form class="d-flex" role="search">
    <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search" style="margin: 0.5ch;">    
    <button class="btn btn-outline-sucess" type="submit" 
    style="border: 0.2ch solid white;  background-color: transparent; color: white;">🔎</button>
</form>

    </div>
  </div>
</nav>

<!-- Área de conteúdo principal da página -->
<div class="container" style="max-width: 90%; margin: 0 auto;">
  <br>
    
<!-- Script para incluir a funcionalidade do Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
