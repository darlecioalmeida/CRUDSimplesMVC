<?php

class Session 
{

//INICIALIZA UMA SESSAO
public static function init()
{
       session_start();
}


// LIMPA UMA SESSAO OU UM ARRAY 
public static function destroy($valor = false)
{
    
            if ($valor) {
                    //ARRAY
                    if(is_array($valor)){

                        for ($i=0; $i < count($valor); $i++) { 
                                
                                if( isset($_SESSION[$valor[$i]]) ){
                                    unset($_SESSION[$valor[$i]]);

                                }
                        }

                    } else {
                           
                            if( isset($_SESSION[$valor])){
                                unset($_SESSION[$valor]);

                            }
                    }

            } else {

                session_destroy();
            }

}

//SETA UM  VALOR NA SESSAO
public static function set($nome, $valor)
{
    if(!empty($nome)){
    $_SESSION[$nome] = $valor;
    }

}

//RETORNA VALOR DA SESSAO

public static function get($nome)
{
    if(isset($_SESSION[$nome])){
        return $_SESSION[$nome];
    }

}


//VERIFICA SE TEM SESSAO ATIVA E VALIDA O NIVEL DE ACESSO USO NOS /controlles

public static function acesso($nivel)
{
    if(!Session::get('autenticado')){
        header('location:' . BASE_URL.'errors/access/832');
        exit;
    }

    //VERIFICA SE TEM TEMPO ATIVO SESSAO
    Session::tempo();

    if(Session::getNivel($nivel) > Session::getNivel(Session::get('nivel')) ){
        header('location:' . BASE_URL.'errors/access/832');
        exit;
    }


}


//VERIFICA SE A TEM ACESSO USAR NAS /views   NÃO REDIRECIONA

public static function acessoView($nivel)
{
    if(!Session::get('autenticado')){
        return false;
    }

    if(Session::getNivel($nivel) > Session::getNivel(Session::get('nivel')) ){
        return false;
    }

    return true;

}



//VERIFICA SE A TEM ACESSO USAR NAS /views   NÃO REDIRECIONA

public static function acessoRestrito(array $nivel, $nAdmin=false)
{
    if(!Session::get('autenticado')){
        header('location:' . BASE_URL.'errors/access/832');
        exit;
    }
    //VERIFICA SE TEM TEMPO ATIVO SESSAO
    Session::tempo();

    if($nAdmin==false ){
        if(Session::get('nivel')=='admin'){
            return;
        }
    }

    if(count($nivel) ){
        
        if(in_array(Session::get('nivel'), $nivel)){

            return;
        }


        header('location:' . BASE_URL.'errors/access/832');        
    }

}



public static function acessoViewRestrito(array $nivel, $nAdmin=false)
{
    if(!Session::get('autenticado')){
        return false; 
    }

    if($nAdmin==false ){
        if(Session::get('nivel')=='admin'){
            return true;
        }
    }

    if(count($nivel) ){
        
        if(in_array(Session::get('nivel'), $nivel)){

            return true;
        }


        return false;        
    }

    
}



//VERIFICA NIVEL DE ACESSO

public static function getNivel($nivel)
{
    
    $r['admin'] = 3;
    $r['gerente'] = 2;
    $r['normal'] = 1;
    
    
    if(!array_key_exists($nivel,$r)){

        
        throw new Exception('Error de acesso!');
    
    } else {

        return $r[$nivel];

    }

}



public static function tempo()
{
    if(!Session::get('tempo') || !defined('SESSION_TIME')){
        throw new Exception('Não ha tempo de sessão definida');

    }

    if(SESSION_TIME==0){
        return;
    }

    if( time() - Session::get('tempo') > (SESSION_TIME * 60) ){
        Session::destroy();

         header('location:' . BASE_URL.'errors/access/2421');     
         
    } else {
        Session::set('tempo',time());
    }




}

}

?>
