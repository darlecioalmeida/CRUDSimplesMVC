<!-- Principal jumbotron, para a principal mensagem de marketing ou call to action -->
<div class="jumbotron">
    <div class="container">
        <h1 class="display-3">Pessoas</h1>
        <p>Bem vindo a lista de Pessoas, aqui voce pode Adicionar, Editar e Excluir. É possivel filtrar pessoas usando
            Ajax e utilizar paginação.</p>
        <p><a class="btn btn-primary btn-lg" href="{$_layoutParams.root}pessoa/create" role="button"> <i
                    class="bi bi-person-plus-fill"></i> Adicionar novo
            </a>
            <a class="btn btn-outline-danger btn-lg" target="_blank"
                href="{$_layoutParams.root}relatorio/listagemPessoas" role="button"> <i
                    class="bi bi-file-earmark-pdf"></i> Gerar Relátorio</a>
        </p>
    </div>
</div>

<div class="container">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="input-group">
                    <input type="text" class="form-control ajaxPesquisa" focus id="_pesquisa" name="_pesquisa"
                        placeholder="Pesquisar nome, código ou email "
                        value="{if isset($dados['nome'])} {$dados['nome']} {/if}" required>
                    <span class="input-group-append">
                        <a id="btnPesquisaAjax" class="btn  btn-primary border-start-0 border  ms-n3 mb-3"
                            href="{$_layoutParams.root}pessoa/index">
                            <i class="bi bi-search"></i>
                        </a>

                    </span>

                </div>
            </div>
            <div class="col-md-3">
                <div class="input-group">

                    <select class="custom-select d-block w-100 mb-3 ajaxPesquisa" id="_pesquisaCategoria"
                        name="categoria_id" required>
                        <option value="">Categoria...</option>

                        {if isset($categorias) && count($categorias)}

                            {foreach from=$categorias item=cat}

                                {if isset($dados['categoria_id'])==$cat['id'] }

                                    <option value="{$cat['id']}" SELECTED>{$cat['nome']}</option>
                                {else}
                                    <option value="{$cat['id']}">{$cat['nome']}</option>
                                {/if}

                            {/foreach}
                        {/if}

                    </select>



                </div>
            </div>

        </div>
    </div>

    <div class="row">

        {include file="{$_layoutParams.rootview}{"_lista.tpl"}" }

    </div>