<?php
// Variáveis para armazenar as credenciais de conexão com o banco de dados
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "PW_BD"; // Nome do banco de dados que será criado

// Script SQL que será executado para criar o banco de dados, tabelas e inserir registros
$script = "
    CREATE DATABASE PW_BD; -- Cria o banco de dados se ele não existir
    USE PW_BD; -- Usa o banco de dados criado

   
    CREATE TABLE PRODUTOS (
        ID INT PRIMARY KEY AUTO_INCREMENT, -- Chave primária com incremento automático
        DESCRICAO VARCHAR(150) NOT NULL, -- Descrição do produto
        CODIGO_BARRAS VARCHAR(25) NOT NULL, -- Código de barras
        VALOR DECIMAL(10,2) NOT NULL, -- Valor do produto
        IMAGEM VARCHAR(50), -- Caminho da imagem do produto (opcional)
        ATIVO BIT NOT NULL -- Flag para saber se o produto está ativo
    );

    
    INSERT INTO PRODUTOS (DESCRICAO, CODIGO_BARRAS, VALOR, ATIVO) 
    VALUES ('Amendoin Verde', '7898728640096', 5.50, 1),
           ('Goiabinha Saborosa', '7897045700725', 1.50, 1);

    
    INSERT INTO PRODUTOS (DESCRICAO, VALOR, CODIGO_BARRAS, ATIVO) VALUES
    ('Camiseta Estampada - 100% Algodão', 49.90, '1234567890123', 1),
    ('Tênis Esportivo - Conforto e Estilo', 299.90, '1234567890124', 1),
    -- Mais produtos continuam aqui...
    ('Jogo de Lençóis - 150 Fios', 159.90, '1234567890142', 1);

    
    CREATE TABLE CATEGORIAS (
        ID INT PRIMARY KEY AUTO_INCREMENT, -- Chave primária com incremento automático
        NOME VARCHAR(80) NOT NULL -- Nome da categoria do produto
    );

    
    CREATE TABLE USUARIOS (
        ID INT PRIMARY KEY AUTO_INCREMENT, -- Chave primária com incremento automático
        LOGIN VARCHAR(50) NOT NULL, -- Login do usuário
        SENHA VARCHAR(80) NOT NULL, -- Senha do usuário
        ATIVO BIT DEFAULT 1 -- Flag para saber se o usuário está ativo
    );

    
    CREATE TABLE PERMISSOES (
        ID INT PRIMARY KEY AUTO_INCREMENT, -- Chave primária com incremento automático
        DESCRICAO VARCHAR(150) NOT NULL, -- Descrição da permissão
        ROLE VARCHAR(50) NOT NULL -- Função relacionada à permissão (como ADMIN, USER, etc.)
    );   

    
    ALTER TABLE PRODUTOS
    ADD COLUMN CATEGORIA_ID INT;

    
    ALTER TABLE PRODUTOS
    ADD CONSTRAINT FK_PRODUTOS_CATEGORIAS
    FOREIGN KEY (CATEGORIA_ID) REFERENCES CATEGORIAS(ID);

    CREATE TABLE USUARIOS_PERMISSOES (
        ID INT PRIMARY KEY AUTO_INCREMENT,
        USUARIO_ID INT NOT NULL,
        PERMISSAO_ID INT NOT NULL,
        CONSTRAINT FK_USUARIO FOREIGN KEY (usuario_id) REFERENCES USUARIOS(ID) ON DELETE CASCADE,
        CONSTRAINT FK_PERMISSAO FOREIGN KEY (permissao_id) REFERENCES PERMISSOES(ID) ON DELETE CASCADE
    );

    
";


// Conexão com o banco de dados usando MySQLi
$conexao = new mysqli($servidor, $usuario, $senha, $banco);

// Verifica se houve erro na conexão com o banco de dados
if ($conexao->connect_error) 
{
    // Se houver erro, a execução é interrompida e a mensagem de erro é exibida
    die ("Falha na conexão: " . $conexao->connect_error);
}
?>
