<?php

class Paginador
{

    private $_dados;
    private $_paginacao;

    public function  __construct()
    {
        $this->_dados = array();
        $this->_paginacao = array();
    }

    public function paginar($query, $pagina = false, $limite = false, $paginacao = false)
    {
        if ($limite && is_numeric($limite)) {
            $limite = $limite;
        } else {
            $limite = 10;
        }

        if ($pagina && is_numeric($pagina)) {
            $pagina = $pagina;
            $incio = ($pagina - 1) * $limite;
        } else {
            $pagina = 1;
            $incio = 0;
        }

        $registros = count($query);
        $total = ceil($registros / $limite);
        $this->_dados = array_slice($query, $incio, $limite);


        $paginacao = array();
        $paginacao['atual'] = $pagina;
        $paginacao['total'] = $total;

        if ($pagina > 1) {
            $paginacao['primeiro'] = 1;
            $paginacao['anterior'] = $pagina - 1;
        } else {

            $paginacao['primeiro'] = '';
            $paginacao['anterior'] = '';
        }


        if ($pagina < $total) {
            $paginacao['ultimo'] = $total;
            $paginacao['seguinte'] = $pagina + 1;
        } else {

            $paginacao['ultimo'] = '';
            $paginacao['seguinte'] = '';
        }



        $this->_paginacao = $paginacao;
        $this->_intervaloPaginacao($paginacao);


        return $this->_dados;
    }



    private function _intervaloPaginacao($limite = false)
    {

        if ($limite && is_numeric($limite)) {
            $limite = $limite;
        } else {
            $limite = 10;
        }

        $total_paginas = $this->_paginacao['total'];
        $pagina_selecionada = $this->_paginacao['atual'];
        $intevalo = ceil($limite / 2);
        $paginas = array();

        $intevalo_direto = $total_paginas - $pagina_selecionada;

        if ($intevalo_direto < $intevalo) {
            $resto = $intevalo - $intevalo_direto;
        } else {

            $resto = 0;
        }

        $intevalo_esquerdo = $pagina_selecionada - ($intevalo + $resto);

        for ($i = $pagina_selecionada; $i > $intevalo_esquerdo; $i--) {

            if ($i == 0) {
                break;
            }
            $paginas[] = $i;
        }

        sort($paginas);

        if ($pagina_selecionada < $intevalo) {
            $intevalo_direto = $limite;
        } else {
            $intevalo_direto = $pagina_selecionada + $intevalo;
        }

        for ($i = $pagina_selecionada + 1; $i <= $intevalo_direto; $i++) {

            if ($i > $total_paginas) {
                break;
            }

            $paginas[] = $i;
        }

        $this->_paginacao['intervalo'] = $paginas;
        return $this->_paginacao;
    }


    public function getView($view, $link = false, $elementoUpdate = false)
    {
        $rotaView = ROOT . 'views' . DS . '_paginador' . DS . $view . '.php';

        if ($link) {
            $link = BASE_URL . $link . '/';
        }

        if (!$elementoUpdate) {
            $elementoUpdate = "#_listaPadrao";
        }



        if (is_readable($rotaView)) {
            ob_start();
            include $rotaView;
            $conteudo = ob_get_contents();
            ob_get_clean();

            return $conteudo;
        }

        throw new Exception('Error de paginacao');
    }
}
