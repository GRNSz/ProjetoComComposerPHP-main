<?php

//namespace sendo definido abaixo:
namespace MeuProjeto\Login;

//classe Login sendo definida abaixo:
class Login {

    private $usuarios = [
        [
            'usuario' => 'admin',
            'senha' => '1234'
        ]
    ];

    public function exibirFormulario() {
        echo '<div class="container">
                <form method="POST" action=""> 
                    <h2>Login</h2>
                    <input type="text" name="usuario" placeholder="Digite o nome do Usuario" required>
                    <input type="password" name="senha" placeholder="Digite a Senha" required>
                    <div>
                        <button type="submit" class="login-btn">Login</button>
                        <button type="button" class="register-btn">Cadastrar</button>
                    </div>
                </form>
            </div>';
    }

    public function verificarLogin() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $usuario = $_POST["usuario"];
            $senha = $_POST["senha"];

            foreach ($this->usuarios as $user) {
                if ($user['usuario'] == $usuario && $user['senha'] == $senha) {
                    echo "Acesso liberado!";
                    return; // Interrompe o loop após encontrar o usuário
                }
            }

            echo "Acesso negado.";
        }
    }
}
