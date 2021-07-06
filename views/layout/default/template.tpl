<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"> -->
    <link rel="stylesheet" href="{$_layoutParams.root}public/css/bootstrap-4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{$_layoutParams.root}public/css/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="{$_layoutParams.rota_css}estilos.css">
    {* ADICIONA OS ESTILOS INFOMADO PELA FUNCAO setCss(); *}
    {if isset($_layoutParams.css) && count($_layoutParams.css)}
        {foreach from=$_layoutParams.css item=css }

            <link rel="stylesheet" href=" {$css} ">

        {/foreach}
    {/if}
    <title>{$titulo|default:'SISTEMA'}</title>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">
            {$_layoutParams.configs.app_name|default:'CRUDMVC'}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDefault"
            aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarDefault">
            <ul class="navbar-nav mr-auto">

                {if isset($_layoutParams.menu)}

                    {if Session::get('autenticado')}
                        {foreach item=it from=$_layoutParams.menu}


                            {*VERIFICA SE A PAGINA ESTA ATIVA*}
                            {if isset($_layoutParams.item) && $_layoutParams.item ==$it.id}

                                {assign var="_item_style" value='active'}
                            {else}
                                {assign var="_item_style" value=''}
                            {/if}

                            <li class="nav-item {$_item_style}" id="{$it.id}" style="{$it.style}"><a
                                    class="nav-link" href="{$it.url}"><i class="{$it.icon}"></i> {$it.titulo}</a></li>

                        {/foreach}
                    {/if}
                {/if}
                {if Session::get('autenticado')}
                    {*<form class="form-inline my-2 my-lg-0 ml-5">
                        <input class="form-control mr-sm-2" type="text" placeholder="Pesquisa" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                    </form>*}
                <{/if} </ul>

                    {if Session::get('autenticado')}

                           <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Olá, {strtoupper(Session::get('usuario'))}
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                              <a class="dropdown-item" href="{$_layoutParams.root}usuario/trocarsenha">Trocar Senha</a>
                              <a class="dropdown-item" href="{$_layoutParams.root}usuario/index">Meus Dados</a>
                              <a class="dropdown-item text-danger" href="{$_layoutParams.root}login/encerrar">Encerrar Sessão</a>
                            </div>
                          </div>


                    {else}
                        <a href="{$_layoutParams.root}login" class="btn btn-success ml-3  my-0 my-sm-0"
                            type="submit"><i class="bi bi-lock-fill"></i> Iniciar
                            Sessão</a>
                        <a href="{$_layoutParams.root}registro" class="btn btn-danger ml-3  my-0 my-sm-0"
                            type="submit"> <i class="bi bi-person-plus-fill"></i> Registrar-se</a>

                    {/if}

        </div>
    </nav>

    <main role="main" class="container-fluid">

        {if isset($mensagem)}
            <div class="container mt-4" style="display: block;">
                <div class="alert alert-success" role="alert" id="msgsucesso">
                    {$mensagem}
                </div>
            </div>
        {/if}

        {if isset($_error)}
            <div class="container mt-4" style="display: block;">
                <div class="alert alert-danger" role="alert" id="msgerror">
                    {$_error}
                </div>
            </div>
        {/if}
        {if isset($_conteudo)}
        {include file=$_conteudo }
        {/if}
    </main>
    <footer class="container-fluid text-center">
        <p> Copyright &copy;
            {date('Y')} {$_layoutParams.configs.app_name}
        </p>
    </footer>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->

    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script> -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->

    <script src="{$_layoutParams.root}public/js/jquery.min.js"></script>
    <script src="{$_layoutParams.root}public/js/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="{$_layoutParams.root}public/css/bootstrap-4.6.0/js/bootstrap.min.js"></script>
    {*ADICIONA OS SCRIPTS INFOMADO PELA FUNCAO setJs();*}
    {if isset($_layoutParams.js) && count($_layoutParams.js)}
        {foreach item=js from=$_layoutParams.js}
            <script src="{$js}"></script>
        {/foreach}
    {/if}
<script>
        function pesquisaAjaxPaginacao($url, $update = '_listaPadrao', $tipo = 'html') {

            {*PESQUISA POR AJAX  NAS PAGINACAO PASSANDO ELEMENTO PELO CONTROLLER*}
            //  var url = $(this).attr('href').split('?');
            $.ajax({
                type: "post",
                url: $url,
                dataType: $tipo,
                data: $('.ajaxPesquisa').serialize(),
                success: (
                    function(data) {
                        $($update).html(data);
                    })
            });

        }
    </script>
</body>

</html>