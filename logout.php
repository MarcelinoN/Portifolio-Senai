<?php
session_start(); // Inicia a sessão

// Verifica se a sessão está ativa, se sim, destrói a sessão
if (isset($_SESSION['email']) && isset($_SESSION['senha'])) {
    unset($_SESSION['email']); // Remove a variável de sessão de email
    unset($_SESSION['senha']); // Remove a variável de sessão de senha
    session_destroy(); // Destrói toda a sessão
}

// Redireciona para a página de login
header('Location: login.php');
exit;
?>
