<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', 'toperick123*');
define('DB', 'convidados');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die('Não foi possível conectar');
