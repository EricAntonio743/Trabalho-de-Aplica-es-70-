<?php
// Inicialize a sessão
session_start();

// Destrua todas as variáveis de sessão
session_unset();

// Destrua a sessão
session_destroy();

// Redirecione para a página de login ou qualquer outra página de sua escolha
header("Location: cadastro.html");
exit();
?>