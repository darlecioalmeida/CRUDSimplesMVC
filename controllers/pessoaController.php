<?php


class PessoaController extends Controller
{

    private $_pessoaModel;

    public function __construct()
    {
        parent::__construct();
        $this->_pessoaModel = $this->loadModel('pessoa');
    }


    public function index($pagina = false)
    {

        Session::acessoRestrito(array('normal'), false);

        $this->_view->setJs(array('pessoa'));

        //IMPORTA LIVRARIA PARA FAZER PEGINACAO
        $this->getLibrary('paginador');
        $paginador = new Paginador();

        if (!$this->filtrarInt($pagina)) {
            $pagina = false;
        } else {
            $pagina = (int) $pagina;
        }

        //USO SEM SMARTY
        //$this->_view->pessoas= $paginador->paginar($this->_pessoaModel->getPessoas(), $pagina, 5);



        //$this->_view->assign('paginacao', $paginador->getView('paginacao','pessoa/index','#_listaPessoa'));


        //USO COM SMARTY
        $this->_view->assign('dados',  $_POST);
        $this->_view->assign('categorias', $this->loadModel('categoria')->getCategorias());
        $this->_view->assign('pessoas', $paginador->paginar($this->_pessoaModel->getPessoas($_POST), $pagina, PAGINACAO_LIMIT));
        $this->_view->assign('titulo', '');

        if ($this->isAjax()) {
            $this->_view->assign('paginacao', $paginador->getView('paginacao', 'pessoa/index', '#_listaPessoa'));
            $this->_view->renderizarParcial('_lista', 'pessoa');
        } else {
            $this->_view->assign('paginacao', $paginador->getView('paginacao', 'pessoa/index', '#_listaPessoa'));
            $this->_view->renderizar('index', 'pessoa');
        }
    }



    public function _ajaxLista($pagina = false)
    {


        //$this->_view->setJs(array('pessoa'));

        //IMPORTA LIVRARIA PARA FAZER PEGINACAO
        $this->getLibrary('paginador');
        $paginador = new Paginador();

        if (!$this->filtrarInt($pagina)) {
            $pagina = false;
        } else {
            $pagina = (int) $pagina;
        }

        //USO SEM SMARTY
        //$this->_view->pessoas= $paginador->paginar($this->_pessoaModel->getPessoas(), $pagina, 5);

        //USO COM SMARTY
        $this->_view->assign('dados',  $_POST);
        $this->_view->assign('pessoas', $paginador->paginar($this->_pessoaModel->getPessoas($_POST), $pagina, PAGINACAO_LIMIT));
        $this->_view->assign('paginacao', $paginador->getView('paginacao', 'pessoa/_ajaxLista'));
        $this->_view->assign('titulo', '');

        $this->_view->renderizarParcial('_lista', 'pessoa');
    }


    public function create()
    {

        //echo 'NIVEL:'. Session::get('nivel'). '<br>';
        //exit;
        Session::acessoRestrito(array('normal'), false);


        $this->_view->assign('categorias', $this->loadModel('categoria')->getCategorias());
        $this->_view->assign('titulo',  'Pessoa');
        $this->_view->assign('subtitulo',  'Novo cadastro');


        //INSERE SCRIPTS JS     
        $this->_view->setJs(array('create'));

        if ($this->getInt('salvar') == 1) {

            $this->_view->assign('dados',  $_POST);

            if (!$this->getTexto('nome')) {
                $this->_view->assign('_error', "Digite o Nome da Pessoa");
                $this->_view->renderizar('create', 'pessoa');
                exit;
            }

            if (!$this->getTexto('categoria_id')) {
                $this->_view->assign('_error', "Selecione uma Categoria");
                $this->_view->renderizar('create', 'pessoa');
                exit;
            }

            // INSERE OS DADOS NO BANCO DE DADOS
            $insert = $this->_pessoaModel->insertPessoa(
                $this->getPostParametro('nome'),
                $this->getPostParametro('email'),
                $this->getTexto('categoria_id')
            );

            if ($insert == true)
                $this->redirect('pessoa');
        }


        $this->_view->renderizar('create', 'pessoa');
    }

    public function view($id)
    {

        Session::acesso('normal');

        if (!$this->filtrarInt($id)) {
            $this->redirect('pessoa');
        }

        $pessoa = $this->_pessoaModel->getPessoa($this->filtrarInt($id));

        if (!$pessoa) {
            $this->redirect('pessoa');
        }

        $this->_view->assign('categorias', $this->loadModel('categoria')->getCategorias());
        $this->_view->assign('dados',  $pessoa);
        $this->_view->assign('titulo', 'Pessoa');
        $this->_view->assign('subtitulo',  'Edição de cadastro');

        $this->_view->setJs(array('view'));

        $this->_view->renderizar('view', 'pessoa');
    }


    public function update($id)
    {

        Session::acesso('gerente');

        if (!$this->filtrarInt($id)) {
            $this->redirect('pessoa');
        }

        $pessoa = $this->_pessoaModel->getPessoa($this->filtrarInt($id));

        if (!$pessoa) {
            $this->redirect('pessoa');
        }

        $this->_view->assign('categorias', $this->loadModel('categoria')->getCategorias());
        $this->_view->assign('dados',  $pessoa);
        $this->_view->assign('titulo', 'Pessoa');
        $this->_view->assign('subtitulo',  'Edição de cadastro');

        $this->_view->setJs(array('update'));

        if ($this->getInt('update') == 1) {

            $this->_view->dados = $_POST;

            if (!$this->getTexto('nome')) {
                $this->_view->assign('_error',  "Digite o Nome da Pessoa");
                $this->_view->renderizar('update', 'pessoa');
                exit;
            }

            if (!$this->getTexto('categoria_id')) {
                $this->_view->assign('_error', "Selecione uma Categoria");
                $this->_view->renderizar('update', 'pessoa');
                exit;
            }

            // ATUALIZA OS DADOS NO BANCO DE DADOS
            $update = $this->_pessoaModel->updatePessoa(
                $this->filtrarInt($id),
                $this->getTexto('nome'),
                $this->getTexto('email'),
                $this->getTexto('categoria_id')
            );

            if ($update == true)
                $this->redirect('pessoa');
        }


        $this->_view->renderizar('update', 'pessoa');
    }


    public function delete($id)
    {

        //GERENTE É O CORRETO
         
        if(!Session::acessoView('admin')){
            echo json_encode(array('status'=>false, 'resultado'=>"Error ao excluir sem permissão somente ADMIN"));
            exit;
        }

        if (!$this->filtrarInt($id)) {
            $this->redirect('pessoa');
        }

        $pessoa = $this->_pessoaModel->getPessoa($this->filtrarInt($id));

        if (!$pessoa) {
            $this->redirect('pessoa');
        }


        // DELETA REGISTRO NO BANCO DE DADOS
        $delete = $this->_pessoaModel->deletePessoa($this->filtrarInt($id));
        if ($delete == true){
            echo json_encode(array('status'=>true, 'resultado'=>"Pessoa excluida com sucesso!"));
            exit;

        } else {
            echo json_encode(array('status'=>false, 'resultado'=>"Error ao excluir"));
            exit;

        }
            

        $this->_view->renderizar('index', 'pessoa');
    }
}
