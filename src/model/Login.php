<?php

// Definindo o namespace
namespace MeuProjeto\Login;

// Definindo a classe Login
class Login {

    public $usuarios = [
        [
            'usuario' => 'admin',
            'senha' => '1234'
        ]
    ];

    public function verificarLogin() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $usuario = htmlspecialchars(trim($_POST["usuario"]));
            $senha = htmlspecialchars(trim($_POST["senha"]));

            foreach ($this->usuarios as $user) {
                if ($user['usuario'] === $usuario && $user['senha'] === $senha) {
                    echo "Acesso liberado!";
                    return; // Interrompe o loop após encontrar o usuário
                }
            }
            echo "Acesso negado.";
        }
    }
}
