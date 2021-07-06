<?php

class ErrorsController extends Controller
{

    public function __construct()
    {
        parent::__construct();

    }


    public function index()
    {
        
        $this->_view->assign('titulo', 'Error');
        $this->_view->assign('subtitulo', '');
        $this->_view->assign('mensagem_error', $this->_getError());
        
        $this->_view->renderizar('index');

    }


    public function access($codigo){
        
        $this->_view->assign('titulo', 'Error');
        $this->_view->assign('subtitulo', '');
        $this->_view->assign('mensagem_error',  $this->_getError($codigo));

        $this->_view->renderizar('access');

    }


    private function _getError($codigo=false){
        
        if ($codigo){
            $codigo = $this->filtrarInt($codigo);
            if (is_int($codigo)){
                $codigo = $codigo;
            }
  
        } else {
            $codigo ='default';
        }
       

        $error['default'] = 'Ocorreu um Error na pagina.';
        $error['832'] = 'Acesso Restrito!';
        $error['2421'] = 'Tempo da Sessão expirada!';

        if (array_key_exists($codigo, $error)) {
                
            return $error[$codigo];

        } else {
            return $error['default'];
        }
        

    }



}
