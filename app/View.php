<?php

//https://www.smarty.net/docsv2/pt_BR/
require_once ROOT . 'libs' . DS . 'smarty' . DS . 'libs' . DS . 'Smarty.class.php';


class View extends Smarty
{

    private $_conttrolador;
    private $_js;
    private $_css;

    public function __construct(Request $req)
    {
        parent::__construct();
        $this->_conttrolador = $req->getControlador();
        $this->_js = array();
        $this->_css = array();
    }

    public function renderizarParcial($nomeview, $item = false)
    {
        //SMARTY
        $this->template_dir = ROOT . 'views' . DS . 'layout' . DS . DEFAULT_LAYOUT . DS;
        $this->config_dir = ROOT . 'views' . DS . 'layout' . DS . DEFAULT_LAYOUT . DS . 'configs' . DS;
        $this->cache_dir = ROOT . 'tmp' . DS . 'cache' . DS;
        $this->compile_dir = ROOT . 'tmp' . DS . 'template' . DS;

        //PARAMETROS UTILIZADO NOS LAYOUT DE TEMPLATES    
        $rotaView = ROOT . 'views' . DS . $this->_conttrolador . DS . $nomeview . '.tpl';  //ou .phtml
        $js = array();
        if (count($this->_js)) {

            $js = $this->_js;
        }

        $css = array();
        if (count($this->_css)) {

            $css = $this->_css;
        }
        $_layoutParams = array(
            'rota_css' => BASE_URL . 'views/layout/' . DEFAULT_LAYOUT . '/css/',
            'rota_img' => BASE_URL . 'views/layout/' . DEFAULT_LAYOUT . '/img/',
            'rota_js' => BASE_URL . 'views/layout/' . DEFAULT_LAYOUT . '/js/',
            'item' => $item, //smarty
            
            'js' => $js,
            'css' => $css,
            'root' => BASE_URL,
            'rootview' => ROOT . 'views' . DS . $this->_conttrolador . DS,
            'configs' => array(
                'app_name' => APP_NAME,
                'app_slogan' => APP_SLOGAN,
                'app_empresa' => APP_EMPRESA,
            )
        );

        if (is_readable($rotaView)) {
            //USO COM SMARTY TEMPLATE
            $this->assign('_layoutParams', $_layoutParams);
            //$this->assign('_conteudo', $rotaView);
            $this->display($rotaView);


        } else {
            throw new Exception("Erro ao ler a View: $nomeview");
        }




    }


    public function renderizar($nomeview, $item = false)
    {

        //SMARTY
        $this->template_dir = ROOT . 'views' . DS . 'layout' . DS . DEFAULT_LAYOUT . DS;
        $this->config_dir = ROOT . 'views' . DS . 'layout' . DS . DEFAULT_LAYOUT . DS . 'configs' . DS;
        $this->cache_dir = ROOT . 'tmp' . DS . 'cache' . DS;
        $this->compile_dir = ROOT . 'tmp' . DS . 'template' . DS;


        //MENUS DO SITEMA
        $menu = array(

            array(
                'id' => 'inicio',
                'titulo' => 'Inicio',
                'icon' => 'bi-house-fill',
                'style' => '',
                'url' => BASE_URL,
                'visivel'=>(Session::get('autenticado'))

            ),
            
            array(
                'id' => 'pessoa',
                'titulo' => 'Pessoas',
                'icon' => 'bi bi-person-lines-fill',
                'style' => '',
                'url' => BASE_URL . 'pessoa',
                'visivel'=>(Session::get('autenticado'))

            ),
            array(
                'id' => 'categoria',
                'titulo' => 'Categorias',
                'icon' => 'bi-menu-button-wide-fill',
                'style' => '',
                'url' => BASE_URL. 'categoria',
                'visivel'=>(Session::get('autenticado'))
            ),
        );


        $js = array();
        if (count($this->_js)) {

            $js = $this->_js;
        }

        $css = array();
        if (count($this->_css)) {

            $css = $this->_css;
        }

        //PARAMETROS UTILIZADO NOS LAYOUT DE TEMPLATES    
        //$_layoutParametros = array() //USO SEM SMARTY
        $rotaView = ROOT . 'views' . DS . $this->_conttrolador . DS . $nomeview . '.tpl';  //ou .phtml

        $_layoutParams = array(
            'rota_css' => BASE_URL . 'views/layout/' . DEFAULT_LAYOUT . '/css/',
            'rota_img' => BASE_URL . 'views/layout/' . DEFAULT_LAYOUT . '/img/',
            'rota_js' => BASE_URL . 'views/layout/' . DEFAULT_LAYOUT . '/js/',
            'menu' => $menu,
            'item' => $item, //smarty
            'js' => $js,
            'css' => $css,
            'root' => BASE_URL,
            'rootview' => ROOT . 'views' . DS . $this->_conttrolador . DS,
            'configs' => array(
                'app_name' => APP_NAME,
                'app_slogan' => APP_SLOGAN,
                'app_empresa' => APP_EMPRESA,
            )


        );





        if (is_readable($rotaView)) {



            //USO COM SMARTY TEMPLATE
            $this->assign('_layoutParams', $_layoutParams);
            $this->assign('_conteudo', $rotaView);
            $this->display('template.tpl');

            //USO SEM SMARTY
            //include_once ROOT . 'views' . DS . 'layout' . DS . DEFAULT_LAYOUT . DS . 'header.php';
            //include_once $rotaView;
            //include_once ROOT . 'views' . DS . 'layout' . DS . DEFAULT_LAYOUT . DS . 'footer.php';



        } else {
            throw new Exception("Erro ao ler a View: $nomeview");
        }

        //USO COM SMARTY TEMPLATE
        //$this->assign('_layoutParams', $_layoutParams);
    }

    //CRIA ARRAY PARA INCLUDE NO LAYOUT

    public function setJs(array $js)
    {

        if (is_array($js) && count($js)) {
            for ($i = 0; $i < count($js); $i++) {
                $this->_js[] = BASE_URL . 'views/' . $this->_conttrolador . '/js/' . $js[$i] . '.js';
            }
        } else {
            throw new Exception("Erro ao inporta JSs");
        }
    }

    public function setCss(array $css)
    {

        if (is_array($css) && count($css)) {
            for ($i = 0; $i < count($css); $i++) {
                $this->_css[] = BASE_URL . 'views/' . $this->_conttrolador . '/css/' . $css[$i] . '.css';
            }
        } else {
            throw new Exception("Erro ao inporta Css");
        }
    }
}
