<?php

class PessoaModel extends Model
{


    public function __construct()
    {
        parent::__construct();
    }



    public function getPessoas($filtro=false){

        $pesquisa = false;

            if(isset($filtro["_pesquisa"]) && $filtro["_pesquisa"]!=""){
                $pnome = $filtro["_pesquisa"];
                $pesquisa = " WHERE ( (p.id LIKE '%".$pnome."%') OR (p.nome LIKE '%".$pnome."%') OR (p.email LIKE '%".$pnome."%'))   ";
            }

            if(isset($filtro["categoria_id"]) && $filtro["categoria_id"]!=""){
                
                $pcat = $filtro["categoria_id"];

                if(!$pesquisa) {
                    $pesquisa =  " WHERE p.categoria_id=".$pcat;
                } else {
                    $pesquisa = $pesquisa." AND p.categoria_id=".$pcat;
                }
                
            }

            /*print_r("SELECT p.id, p.nome, p.email, p.categoria_id, c.nome as categoria 
            FROM pessoas p  
            LEFT JOIN categorias c ON c.id=p.categoria_id 
            $pesquisa
            ORDER BY p.nome ASC ");*/
           // exit;

            $pessoas = $this->_db->query("SELECT p.id, p.nome, p.email, p.categoria_id, c.nome as categoria 
                                            FROM pessoas p  
                                            LEFT JOIN categorias c ON c.id=p.categoria_id 
                                            $pesquisa
                                            ORDER BY p.nome ASC ");


           // print_r($pessoas->fetchall());

            return $pessoas->fetchall();

      
    }



    public function getPessoa($id=0){
        
        if($id){
        
        $pessoa = $this->_db->prepare("SELECT p.id, p.nome, p.email, p.categoria_id, c.nome as categoria 
                                            FROM pessoas p  
                                            LEFT JOIN categorias c ON c.id=p.categoria_id 
                                            WHERE p.id=:id
                                            ORDER BY p.nome ASC ");
                    $pessoa->bindParam(':id', $id);
                    $pessoa->execute();

                    return $pessoa->fetch();

        } else {
            $pessoa = array();
            return $pessoa;
        }
       
      
    }


    public function insertPessoa($nome, $email, $categoria_id){
        
        if($nome){
           
            $pessoa = $this->_db->prepare("INSERT INTO pessoas (`nome`, `email`, `categoria_id`) VALUES(:nome, :email, :categoria_id)");
            $pessoa->execute(array(
                ':nome'=>$nome, 
                ':email'=>$email,
                ':categoria_id'=>$categoria_id
            ));
            
            if($pessoa)                
            return true;
            else 
            return false;

        } else {
            
            return false;
        }
      
    }


    public function updatePessoa($id, $nome, $email, $categoria_id){
        
        $id = (int)$id;

        if($id && $nome && $categoria_id){
           
            $pessoa = $this->_db->prepare("UPDATE pessoas SET `nome`=:nome, `email`=:email, `categoria_id`=:categoria_id WHERE id=:id ");
            $pessoa->execute(array(
                ':id'=>$id,
                ':nome'=>$nome, 
                ':email'=>$email,
                ':categoria_id'=>$categoria_id
            ));
            
            if($pessoa)                
            return true;
            else 
            return false;

        } else {
            
            return false;
        }
      
    }

    public function deletePessoa($id){
        
        $id = (int)$id;

        if($id){

            $pessoa = $this->_db->prepare("DELETE FROM pessoas WHERE id=:id ");
            $pessoa->execute(array(
                ':id'=>$id
            ));
            
            if($pessoa)                
            return true;
            else 
            return false;
        
        }
           
    }




}

?>