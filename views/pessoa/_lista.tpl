<div class="col-md-12" id="_listaPessoa">
            <div class="table-responsive">

                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Codigo</th>
                            <th scope="col">Nome</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Categoria</th>
                        </tr>
                    </thead>
                    <tbody>
                        {if isset($pessoas) && count($pessoas)}

                            {foreach from=$pessoas item=pessoa}
                                <tr>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn btn-primary dropdown-toggle btn-sm" type="button"
                                                id="BtnAcao{$pessoa.id}" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                Acão
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="BtnAcao{$pessoa.id}">
                                            <a class="dropdown-item" href="{$_layoutParams.root}pessoa/view/{$pessoa.id}"
                                            role="button">Visualizar</a>
                                                <a class="dropdown-item" href="{$_layoutParams.root}pessoa/update/{$pessoa.id}"
                                                    role="button">Editar</a>
                                                <a class="dropdown-item delete" href="{$_layoutParams.root}pessoa/delete/{$pessoa.id}"
                                                    role="button">Excluir</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>{$pessoa.id}</th>
                                    <td scope="row">{$pessoa.nome}</td>
                                    <td>{$pessoa.email}</td>
                                    <td>{$pessoa.categoria}</td>
                                </tr>
                            {/foreach}

                        {else}
                            
                            <tr><td colspan="5"><h4> Não há dados</h4></td></tr>
                            
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