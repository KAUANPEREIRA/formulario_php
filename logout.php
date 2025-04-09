<?php
session_start();
unset($_SESSION['usuario']);//Destruir variavel , não existe mais no escopo

header('location: index.php');
/**
 * Deve excluir o cooki e a session
 */
