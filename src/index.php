<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faça seu Login</title>

<body>
    
    <h1>Faça seu Login ou se Cadastre abaixo: </h1><br>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        .container h2 {
            margin-bottom: 20px;
        }
        .container input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .container button {
            width: 48%;
            padding: 10px;
            margin: 10px 1%;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .login-btn {
            background-color: #4CAF50;
            color: white;
        }
        .register-btn {
            background-color: #008CBA;
            color: white;
        }
        .login-btn:hover, .register-btn:hover {
            opacity: 0.8;
        }
    </style>

            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            
                    <input type="text" placeholder="usuario" required>
                    <input type="password" placeholder="senha" required>
           
                <div>
                           
                    <button type="submit" class="login-btn">Login</button>
                    <button type="button" class="register-btn">Cadastrar</button>
                      
                </div>
            </form>
    </div>

<?php
// Inclui o autoload do Composer
require 'vendor/autoload.php'; 

// Usa a classe Login do namespace MeuProjeto\Login
use MeuProjeto\Login\Login; 

// Cria uma instância da classe Login
$login = new Login(); 

// Exibe o formulário de login
$login->exibirFormulario(); 

// Verifica o login (se o formulário foi enviado)
$login->verificarLogin(); 
?>

            </form>
        </head>     
    </body>
</html>