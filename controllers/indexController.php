<?php

class IndexController extends Controller{


    public function __construct()
    {
        parent::__construct();

    }

    //Index Padrao

    public function index(){
       
        //COM SMARTY
        $this->_view->assign('titulo', '');
        $this->_view->renderizar('index','inicio');

        //SEM SMARTY
        //$pessoa = $this->loadModel('pessoa');
        //$this->_view->pessoas = $pessoa->getPessoas();
        //$this->_view->titulo = '';
        //$this->_view->renderizar('index','inicio');
    }
    
}
