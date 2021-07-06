<nav aria-label="Page navigation <?= uniqid() ?>" class="nav justify-content-end ">
    <ul class="pagination p-1 pagination-sm d-flex flex-wrap">

        <?php


        if (isset($this->_paginacao)) {

            if ($this->_paginacao['primeiro']) {
                echo '<li class="page-item"><a class="page-link" href="javascript:pesquisaAjaxPaginacao(\'' . $link . $this->_paginacao['primeiro'] . '\', \''.$elementoUpdate.'\') ">Primeiro</a></li>';
            } else {
                echo '<li class="page-item disabled"><a class="page-link" href="#">Primeiro</a></li>';
            }

            //echo "&nbsp;";

            if ($this->_paginacao['anterior']) {
                echo '<li class="page-item"><a class="page-link" href="javascript:pesquisaAjaxPaginacao(\'' . $link . $this->_paginacao['anterior'] . '\', \''.$elementoUpdate.'\') ">Anterior</a></li>';
            } else {
                echo '<li class="page-item disabled"><a class="page-link" href="#">Anterior</a></li>';
            }

            //echo "&nbsp;";
            /*/print_r($this->_paginacao['intervalo']);
       exit;*/
            for ($i = 0; $i < count($this->_paginacao['intervalo']); $i++) {

                if ($this->_paginacao['atual'] == $this->_paginacao['intervalo'][$i]) {

                    //echo $this->_paginacao['intervalo'][$i];

                    echo '<li class="page-item  active"><a class="page-link" href="#" aria-current="page" >' . $this->_paginacao['intervalo'][$i] . '</a></li>';

                    //echo "&nbsp;";
                } else {

                    echo '<li class="page-item"><a class="page-link" href="javascript:pesquisaAjaxPaginacao(\'' . $link . $this->_paginacao['intervalo'][$i] . '\', \''.$elementoUpdate.'\') ">' . $this->_paginacao['intervalo'][$i] . '</a></li>';
                    // echo "&nbsp;";

                }
            }

            // echo "&nbsp;";


            if ($this->_paginacao['seguinte']) {
                echo '<li class="page-item"><a class="page-link" href="javascript:pesquisaAjaxPaginacao(\'' . $link . $this->_paginacao['seguinte'] . '\', \''.$elementoUpdate.'\') ">Próximo</a></li>';
            } else {
                echo '<li class="page-item disabled"><a class="page-link" href="#">Próximo</a></li>';
            }

            //echo "&nbsp;";


            if ($this->_paginacao['ultimo']) {
                echo '<li class="page-item"><a class="page-link" href="javascript:pesquisaAjaxPaginacao(\'' . $link . $this->_paginacao['ultimo'] . '\', \''.$elementoUpdate.'\') ">Ultimo</a></li>';
            } else {
                echo '<li class="page-item disabled"><a class="page-link" href="#">Ultimo</a></li>';
            }

            //echo "&nbsp;";

        }

        ?>

    </ul>
</nav>