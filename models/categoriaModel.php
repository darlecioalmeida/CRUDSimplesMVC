<?php

class CategoriaModel extends Model
{


    public function __construct()
    {
        parent::__construct();
    }



    public function getCategorias(){
        
        $categorias = $this->_db->query("SELECT c.id, c.nome, COUNT(p.id) as qtd_pessoas 
                                            FROM categorias c  
                                            LEFT JOIN pessoas p ON c.id=p.categoria_id 
                                            GROUP BY c.id ");

        return $categorias->fetchall();
      
    }



    public function getCategoria($id=0){
        
        if($id){
        
        $categoria = $this->_db->query("SELECT c.id, c.nome, COUNT(p.id) as qtd_pessoas 
                                            FROM categorias c  
                                            LEFT JOIN pessoas p ON c.id=p.categoria_id 
                                            WHERE c.id=$id
                                            GROUP BY c.id ");
            return $categoria->fetchall();

        } else {
            $categoria = array();
            return $categoria;
        }
       
      
    }


}

?>