<?php

class Request {

private $_controlador;
private $_metodo;
private $_argumentos;


        public function __construct()
        {
            if(isset($_GET['url'])){

                $url = filter_input(INPUT_GET, 'url',FILTER_SANITIZE_URL);
                $url = explode('/', $url);  // CRIA ARRAY SEPARADO POR ( / )

                $url = array_filter($url); // FILTRA E REMOVE  ( / ) ADICIONAIS 

                $this->_controlador= strtolower(array_shift($url)); // converte em minusculo
                $this->_metodo= strtolower(array_shift($url)); // converte em minusculo
                $this->_argumentos= $url;  // MONTA ARGUMENTOS PASSADO ( /CONTROLADOR/METODO/...<ARGUMENTO1>.../...<ARGUMENTO>...)   EM UMA ARRAY

            }

                if(!$this->_controlador){
                    $this->_controlador= DEFAULT_CONTROLLER;  //CASO NAO ENCONTRE O CONTROLADOR NA URL USA O CONTROLADOR PADRAO DEFINIDO EM ./APP/CONFIG.PHP
                }

                if(!$this->_metodo){
                    $this->_metodo= 'index';  //CASO NAO ENCONTRE O METODO NA URL USA METODO INDEX COMO PADRAO
                }

                if(!isset($this->_argumentos)){

                    $this->_argumentos= array(); //CASO NAO ACHE ARGUMENTOS NA URL RETORNA ARRAY VAZIO
                }

        }


        public function getControlador()
        {
            return $this->_controlador;
        }

        public function getMetodo()
        {
            return $this->_metodo;
        }

        public function getArgs()
        {
            return $this->_argumentos;
        }




}


?>