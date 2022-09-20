<?php
define('HOST', 'us-cdbr-east-06.cleardb.net');
define('USUARIO', 'b11f2ad5c86b46');
define('SENHA', '47553f0a');
define('DB', 'heroku_4ae7b9e0f22d48f');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die('Não foi possível conectar');
