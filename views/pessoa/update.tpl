      {*if isset($dados)} {print_r($dados)} {/if*}

      <div class="container">
          <div class="py-5 text-left">
              <a class="btn btn-primary btn-sm" title="Retornar" href="{$_layoutParams.root}pessoa" role="button"><i
                      class="bi bi-chevron-compact-left"></i></a>

              <h1 class="display-3">{$titulo} </h1>
              <h2>{$subtitulo}</h2>
              <h7><span class="font-italic text-muted"> #{if isset($dados.id)} {$dados.id}-{$dados.nome} {/if}</span>
              </h7>
          </div>

          <div class="row">
              <div class="col-md-8 order-md-1">
                  <h4 class="mb-3">Formulário</h4>
                  <form class="needs-validation" id="form-update-pessoa"
                      action="{$_layoutParams.root}pessoa/update/{$dados['id']}" method="post" novalidate>
                      <input type="hidden" name="update" value="1">
                      <div class="row">
                          <div class="col-md-12 mb-3">
                              <label for="nome">Nome</label>
                              <input type="text" pattern="{'.{3,}'}" class="form-control font-weight-bold" focus
                                  id="nome" name="nome" placeholder=""
                                  value="{if isset($dados.nome)} {$dados.nome} {/if}" required>
                              <div class="invalid-feedback">
                                  É obrigatório inserir um Nome válido.
                              </div>
                          </div>

                      </div>
                      <div class="row">
                          <div class="col-md-6 mb-3">
                              <label for="email">Email <span class="text-muted">(Opcional)</span></label>
                              <input type="email" class="form-control" id="email" name="email"
                                  value="{if isset($dados.email)} {$dados.email} {/if}"
                                  placeholder="fulano@exemplo.com">
                              <div class="invalid-feedback">
                                  Por favor, insira um endereço de e-mail válido.
                              </div>
                          </div>
                          <div class="col-md-6 mb-3">
                              <label for="categoria_is">Categoria</label>
                              <select class="custom-select d-block w-100" id="categoria_id" name="categoria_id"
                                  required>
                                  <option value="">Escolha...</option>

                                  {if isset($categorias) && count($categorias)}

                                      {foreach from=$categorias item=cat}

                                          {if $dados['categoria_id']==$cat['id'] }

                                              <option value="{$cat['id']}" SELECTED>{$cat['nome']}</option>
                                          {else}
                                              <option value="{$cat['id']}">{$cat['nome']}</option>
                                          {/if}

                                      {/foreach}
                                  {/if}

                              </select>
                              <div class="invalid-feedback">
                                  Por favor, escolha uma Categoria válida.
                              </div>
                          </div>

                      </div>

                      <hr class="mb-4">
                      <button class="btn btn-primary btn-lg btn-block" value="salvar" id="BotaoSalvar"
                          type="submit">Salvar</button>
                      <p><br /></p>

                  </form>
              </div>
          </div>
          <div class="mb-6"></div>