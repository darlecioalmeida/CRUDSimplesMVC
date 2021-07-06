<?php

class LoginModel extends Model
{


    public function __construct()
    {
        parent::__construct();
    }


    public function getUsuario($usuario,$senha){
        
        if($usuario!="" && $senha!=""){
        
            $hash = Hash::getHash('sha1',$senha, HASH_KEY);
           
        $dados = $this->_db->prepare("SELECT * FROM usuarios WHERE usuario=:user AND senha=:password ");
        $dados->bindParam(':user', $usuario);
        $dados->bindParam(':password',$hash );
        $dados->execute();

        $dados = $dados->fetch();
       
        return $dados;

        } else {

            return array();
        }
       
      
    }




}

?>