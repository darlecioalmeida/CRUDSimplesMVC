<?php

// 1 EXIBI ERRORS 0 DESATIVA
ini_set('display_errors', 1);




define('DS',DIRECTORY_SEPARATOR); //SEPARADOR
define('ROOT',realpath(dirname(__FILE__)).DS); //DIRETORIO RAIZ COM  ( / ) - SEPARADOR NO FINAL;
define('APP_PATH', ROOT. 'app' .DS);

//echo md5('1234'); exit; gera senha
//echo uniqid(); exit; gera hash key

try{


require_once APP_PATH . 'Config.php';            //ARQUIVO DE CONFIGURAÇÃO
require_once APP_PATH . 'Request.php';           //ARQUIVO DE PARA TRATAMENTO DE REQUISIÇÕES / VALIDACOES
require_once APP_PATH . 'Bootstrap.php';         //ARQUIVO DE CONFIGURAÇÃO RENDER PHP
require_once APP_PATH . 'Controller.php';        //ARQUIVO CONTROLA TODOS OS METODOS
require_once APP_PATH . 'Model.php';             //ARQUIVO DE CONTROLE ORM 
require_once APP_PATH . 'View.php';             //ARQUIVO DE VISUALIZAÇÃO DO FRONT
require_once APP_PATH . 'Registro.php';     
require_once APP_PATH . 'Database.php';         // CONEXAO COM BANCO DE DADOS
require_once APP_PATH . 'Session.php';          // CONTROLE SESSOES DA APLICACAO NIVEIS ACESSO
require_once APP_PATH . 'Hash.php';            // CONTROLA CHAVES CRIPTGRAFAS

 //echo Hash::getHash('sha1','1234', HASH_KEY);exit; //GERAR HASH SENHA

//INICIALIZA APLICAÇÃO
Session::init();


    Bootstrap::run( new Request);
} 
catch(Exception $e) {

    echo $e->getMessage();
}


/*
echo $r->getControlador()."<br>";
echo $r->getMetodo()."<pre>";
print_r($r->getArgs());*/

//echo "<pre>"; print_r(get_required_files());





?>