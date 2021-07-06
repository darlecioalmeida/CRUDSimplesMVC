<?php

class RegistroModel extends Model
{


    public function __construct()
    {
        parent::__construct();
    }



    public function verificarUsuario($usuario)
    {
        $usuario = trim($usuario);

        if ($usuario != "") {

            $usu = $this->_db->prepare("SELECT id,codigo FROM usuarios WHERE usuario=:user");
            $usu->bindParam(':user', $usuario);
            $usu->execute();

            return $usu->fetch();
        }
    }

    public function verificarEmail($email)
    {
        $email = trim($email);

        if ($email != "") {

            $usu = $this->_db->prepare("SELECT id,codigo FROM usuarios WHERE email=:email");
            $usu->bindParam(':email', $email);
            $usu->execute();

            return $usu->fetch();
        }
    }





    public function getUsuario($id, $codigo)
    {

        if ($id != 0 && $codigo != 0) {

            $usu = $this->_db->prepare("SELECT * FROM usuarios WHERE id=:id AND codigo=:codigo");
            $usu->bindParam(':id', $id);
            $usu->bindParam(':codigo', $codigo);
            $usu->execute();
            return $usu->fetch();
        }

        return false;
    }


    public function ativarUsuario($id, $codigo)
    {

        if ($id != 0 && $codigo != 0) {

            $usu = $this->_db->prepare("UPDATE usuarios SET status=1 WHERE id=:id AND codigo=:codigo");
            $usu->execute(array(
                ':id' => $id,
                ':codigo' => $codigo
            ));

            return true;
        }

        return false;
    }




    public function registrarUsuario($nome, $usuario, $senha, $email)
    {

        if ($nome != "" && $usuario != "" && $senha != "" && $email != "") {


            try {

                $randomico  = mt_rand(microtime(rand()), '9999999999');
                $hash = Hash::getHash('sha1', $senha, HASH_KEY);


                $registra = $this->_db->prepare("INSERT INTO usuarios (`nome`, `usuario`, `senha`, `email`,`funcao`, `status`,`data`,`codigo` ) 
                                                           VALUES(:nome, :usuario, :senha, :email, :funcao, 0, now(), :codigo  )");

                $registra->execute(array(
                    ':nome' => trim($nome),
                    ':usuario' => trim($usuario),
                    ':senha' => $hash,
                    ':email' => trim($email),
                    ':funcao' => 'normal',
                    ':codigo' => $randomico
                ));

                      //   print_r($registra->errorInfo());
                     //   exit;
                if ($registra)
                    return true;
                else
                    return false;

                    if (!$registra->execute()) {
                        print_r($registra->errorInfo());
                        
                    }


            } catch (Exception $e) {
                echo 'Exception -> ';
                var_dump($e->getMessage());
            }


        } else {

            return false;
        }
    }
}
