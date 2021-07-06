<?php


class CategoriaController extends Controller{


    public function __construct()
    {
        parent::__construct();

    }


    public function index(){

         Session::acesso('normal');
    

        $categoria = $this->loadModel('categoria');

        $this->_view->assign('categorias', $categoria->getCategorias());
        $this->_view->assign('titulo', '');

        $this->_view->renderizar('index','categoria');

    }


}

?>