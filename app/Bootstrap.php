<?php

class Bootstrap {

    public static function run(Request $req){

        $controller = $req->getControlador().'Controller';
        $RotaControlador = ROOT. 'controllers'.DS. $controller.'.php';
        $metodo = $req->getMetodo();
        $args = $req->getArgs();


        

        if(is_readable($RotaControlador)){  ///VERIFICA DE EXISTE E SE É EXECUTAVEL

            require_once $RotaControlador;
            $controller = new $controller;
       

                if(is_callable(array($controller,$metodo))){ ///VERIFICA O METODO

                    $metodo = $req->getMetodo();

                } else{

                    $metodo = 'index';
                }


                if( isset( $args )){ ///VERIFICA OS ARGUMENTOS E EXECUTA OS METODOS JUNTAMENTE COM OS ARGUMENTO (PARAMETROS VIA GET)

                    call_user_func_array(array($controller,$metodo), $args);

                } else{

                    call_user_func(array($controller,$metodo));

                } 

    
        } else {

                throw new Exception("Nao Encontrado o Controlador: $controller". " Verifique a URL informada.");
            
                
            }
    


    }


}


?>