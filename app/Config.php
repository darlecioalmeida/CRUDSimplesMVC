<?php

define('BASE_URL', 'http://localhost:8084/');
define('DEFAULT_CONTROLLER', 'index');
define('DEFAULT_LAYOUT', 'default');
define('SESSION_TIME', 10);
define('HASH_KEY', '60bbb15c41591');
define('PAGINACAO_LIMIT', 10);


define('APP_NAME', 'Crud Simples');
define('APP_SLOGAN', 'Mini Framework MVC para projetos simples em PHP');
define('APP_EMPRESA', 'Empresa Padrao');


define('DB_ENGINE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'crudsimples');
define('DB_CHAR', 'utf8');


//ALTERAR ESSES DADOS 
define('EMAIL_SMTPDEBUG', false); //SMTP::DEBUG_SERVER;     //HABILITA OU UNAO O DEBUG DE ENVIO
define('EMAIL_HOST', 'smtp.gmail.com');                     //SETA O SERVIDOR QUE VAI ENVIAR SMPT
define('EMAIL_SMTPAUTH', true);                             //HABILITA AUTENTICACAO SMTP
define('EMAIL_USUARIO', 'crixus.api@gmail.com');            //Usuario SMTP
define('EMAIL_SENHA', 'ydumxvmroagiiret');                  //SENHA SMTP pode ser gerada Senha API / Ou senha normal
define('EMAIL_PORTA', 587);                                 //PORTA DE ENVIO 
define('EMAIL_USUARIO_ENVIO','contato@crixus.com.br'); 
define('EMAIL_USUARIO_NOME', 'CrudSimples');
define('EMAIL_USUARIO_TIULO', 'CrudSimples MVC');


?>