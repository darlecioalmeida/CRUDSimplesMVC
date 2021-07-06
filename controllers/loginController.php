<?php


class loginController extends Controller
{
    private $_login;

    public function __construct()
    {
        parent::__construct();
        $this->_loginModel = $this->loadModel('login');
        $this->_view->setJs(array('login'));
        $this->_view->setCss( array('login') );

    }

    public function index()
    {

        if(Session::get('autenticado')){

            $this->redirect();
         
           }

        $this->_view->assign('titulo', 'Iniciar Sessão');

        if($this->getInt('enviar')==1){

            $this->_view->assign('dados', $_POST);

            //print_r($this->_view->dados);


            if(!$this->getAlphaNum('usuario')) {
                $this->_view->assign('_error', 'Digite seu nome de Usuario');
                $this->_view->renderizar('index','login');
                exit;
            }

            if(!$this->getSql('senha')) {
                $this->_view->assign('_error', 'Digite sua Senha');
                $this->_view->renderizar('index','login');
                exit;
            }

            $row = $this->_loginModel->getUsuario( $this->getAlphaNum('usuario'), $this->getSql('senha') );
            
            if(!$row) {
                $this->_view->assign('_error', 'Usuário ou Senha Incorreta!');
                $this->_view->renderizar('index','login');
                exit;
            
            }

            if($row['status']!=1) {
                $this->_view->assign('_error', 'Usuário está Desativado!');
                $this->_view->renderizar('index','login');
                exit;

            }

            

            Session::set('autenticado',true);
            Session::set('nivel',$row['funcao']);
            Session::set('usuario',$row['usuario']);
            Session::set('usuario_id',$row['id']);
            Session::set('tempo',time());

            $this->redirect();

        }

        

        $this->_view->renderizar('index','login');

        
/*
        Session::set('var1','var1');
        Session::set('var2','var2');


        echo 'NIVEL:'. Session::get('nivel'). '<br>';
        echo 'VAR1:'. Session::get('var1'). '<br>';
        echo 'VAR2:'. Session::get('var2'). '<br>';
        echo 'TEMPO:'. Session::get('tempo'). '<br>';

        $this->redirect('login/mostrar');*/


    }


    
    public function mostrar()
    {

        echo 'NIVEL:'. Session::get('nivel'). '<br>';
        echo 'VAR1:'. Session::get('var1'). '<br>';
        echo 'VAR2:'. Session::get('var2'). '<br>';
        
        echo 'TEMPO:'. Session::get('tempo'). '<br>';
    }

    public function encerrar()
    {

        Session::destroy();
        
        $this->redirect('login','login');


    }




}


?>