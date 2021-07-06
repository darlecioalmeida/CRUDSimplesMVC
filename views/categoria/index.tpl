<!-- Principal jumbotron, para a principal mensagem de marketing ou call to action -->
<div class="jumbotron">
    <div class="container">
        <h1 class="display-3">Categorias</h1>
        <p>Lista de Categoria de Pessoas</p>
        <p><a class="btn btn-primary btn-lg" href="{$_layoutParams.root}categoria/create" role="button"> <i
                    class="bi bi-person-plus-fill"></i> Adicionar novo</a>
            <a class="btn btn-outline-danger btn-lg" target="_blank"
                href="{$_layoutParams.root}relatorio/listagemCategorias" role="button"> <i
                    class="bi bi-file-earmark-pdf"></i> Gerar Relátorio</a>
        </p>

    </div>
</div>

<div class="container">
    <div class="row">

        <div class="col-md-12" id="_listaPessoa">
            <div class="table-responsive">

                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Codigo</th>
                            <th scope="col">Categoria</th>
                        </tr>
                    </thead>
                    <tbody>
                        {if isset($categorias) && count($categorias)}

                            {foreach from=$categorias item=categoria}
                                <tr>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn btn-primary dropdown-toggle btn-sm" type="button"
                                                id="BtnAcao{$categoria.id}" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                Acão
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="BtnAcao{$categoria.id}">
                                                <a class="dropdown-item"
                                                    href="{$_layoutParams.root}categoria/update/{$categoria.id}"
                                                    role="button">Editar</a>
                                                <a class="dropdown-item"
                                                    href="{$_layoutParams.root}categoria/delete/{$categoria.id}"
                                                    role="button">Excluir</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>{$categoria.id}</th>
                                    <td scope="row">{$categoria.nome}</td>
                                </tr>
                            {/foreach}

                        {else}
                            <p>
                            <h4> Não há dados cadastrado</h4>
                        {/if}

                    </tbody>
                </table>
            </div>
            <div class="">

                {if isset($paginacao) }
                    {$paginacao}
                {/if}
            </div>
        </div>

    </div>