<?php

// Inclui o autoload do Composer
require __DIR__ . "/../../vendor/autoload.php";

// Usa a classe Login do namespace MeuProjeto\Login
use MeuProjeto\Login\Login;

// Cria uma instância da classe Login
$login = new Login();

// Verifica o login (se o formulário foi enviado)
$login->verificarLogin();