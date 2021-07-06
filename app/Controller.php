<?php


abstract class Controller {

    protected $_view;
    
    
    public function __construct()
    {
        $this->_view = new View(new Request);
    }


   abstract public function index();  //TODAS OS CONTROLADORES É OBRIGADO A INCLUIR UM METODO index();


   //INCLUE A LIVRARIA /models/<NOMEDOMODELO>.php

   protected function loadModel($modelo){

        $modelo = $modelo.'Model';
        $rotaModelo = ROOT. 'models' .DS. $modelo . '.php';
          
        if(is_readable($rotaModelo)){

            require_once ROOT. 'models' .DS. $modelo . '.php';
            $modelo = new $modelo;
            return $modelo;

        } else{
            throw new Exception("Erro ao ler o Modelo: $model");
        }


   }

   //INCLUE A LIVRARIA /libs/<NOMEDALIVRARIA>.php

   protected function getLibrary($livraria){

    $rotaLivraria = ROOT. 'libs' .DS. $livraria . '.php';
      
    if(is_readable($rotaLivraria)){

        require_once ROOT. 'libs' .DS. $livraria . '.php';

    } else{
        throw new Exception("Erro ao ler a livraria: $livraria");
    }


}

    //VALIDA CAMPOS TEXTTO 
    protected function getTexto($valor){
        
        if(isset($_POST[$valor]) && !empty($_POST[$valor]) ) {
            $_POST[$valor] = htmlspecialchars($_POST[$valor], ENT_QUOTES);
            return trim($_POST[$valor]);
        }
        return '';
        
    }

    //VALIDA CAMPOS INT 
    protected function getInt($valor){
        
        if(isset($_POST[$valor]) && !empty($_POST[$valor]) ) {
            $_POST[$valor] = filter_input(INPUT_POST, "$valor", FILTER_VALIDATE_INT);
            return trim($_POST[$valor]);
        }

        return 0;
        
    }

    //VALIDA CARACTERES PARA EVITAR INJECT
    protected function getSql(string  $valor): string {

        $replaceMap = [
            "\0" => "\\0",
            "\n" => "\\n",
            "\r" => "\\r",
            "\t" => "\\t",
            chr(26) => "\\Z",
            chr(8) => "\\b",
            '"' => '\"',
            "'" => "\'",
            '_' => "\_",
            "%" => "\%",
            '\\' => '\\\\'
        ];

        if(isset($_POST[$valor]) && !empty($_POST[$valor]) ) {
            $_POST[$valor] = \strtr($_POST[$valor], $replaceMap);
           
        }

        return  trim($_POST[$valor]);
        
    }


    //VALIDA CARACTERES ACEITA LETRAZ E NUMEROS
    protected function getAlphaNum($valor){
        
        if(isset($_POST[$valor]) && !empty($_POST[$valor]) ) {
            $_POST[$valor] = (string) preg_replace('/[^A-Z0-9_]/i', '', $_POST[$valor]);
            return  trim($_POST[$valor]);
           
        }

        
        
    }



    //VALIDA CAMPOS INT 
    protected function filtrarInt($int){
        
        $int = (int) $int;

        if(is_int($int)){
            return trim($int);
        } else {
            return 0;
        }
        
    }


    //VALIDA CAMPOS POST
    protected function getPostParametro($valor){
        
        if(isset($_POST[$valor]) ) {
            return trim($_POST[$valor]);
        }

        
    }


    //REDIRECIONA
    protected function redirect($rota=false){
        
        if($rota) {

            header('location:'. BASE_URL. $rota);
            exit;
        } else {
            header('location:'. BASE_URL);
            exit;
        }

       
        
    }


    protected function validarEmail($email) {

        if(!filter_var(trim($email),FILTER_VALIDATE_EMAIL)){
            return false;
        }

        return true;

    }

    //VERIFICA SE REQUISAO FOI POR AJAX
    public function isAjax(){
        return (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');
    }




}



?>