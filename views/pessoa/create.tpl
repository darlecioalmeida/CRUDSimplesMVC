      {*if(isset($this->dados)){ print_r($this->dados); }*}

      <div class="container">
          <div class="py-5 text-left">
              <a class="btn btn-primary btn-sm" href="{BASE_URL}pessoa" role="button">VOLTAR &laquo;</a>

              <h1 class="display-3">{$titulo}</h1>
              <h2>{$subtitulo}</h2>
          </div>

          <div class="row">
              <div class="col-md-8 order-md-1">
                  <h4 class="mb-3">Formulário</h4>
                  <form class="needs-validation" id="form-create-pessoa" action="{BASE_URL}pessoa/create" method="post"
                      novalidate>
                      <input type="hidden" name="salvar" value="1">
                      <div class="row">
                          <div class="col-md-12 mb-3">
                              <label for="nome">Nome</label>
                              <input type="text" class="form-control " focus id="nome" name="nome" placeholder=""
                                  value="{if isset($dados['nome'])} {$dados['nome']}<{/if}" required>
                              <div class="invalid-feedback">
                                  É obrigatório inserir um Nome válido.
                              </div>
                          </div>

                      </div>
                      <div class="row">
                          <div class="col-md-6 mb-3">
                              <label for="email">Email <span class="text-muted">(Opcional)</span></label>
                              <input type="email" class="form-control" id="email" name="email"
                                  value="{if isset($dados['email'])} {$dados['email']} <{/if}"
                                  placeholder="fulano@exemplo.com">
                              <div class="invalid-feedback">
                                  Por favor, insira um endereço de e-mail válido.
                              </div>
                          </div>
                          <div class="col-md-6 mb-3">
                              <label for="categoria_id">Categoria</label>
                              <select class="custom-select d-block w-100" id="categoria_id" name="categoria_id"
                                  required>
                                  <option value="">Escolha...</option>

                                  {if isset($categorias) && count($categorias)}

                                      {foreach from=$categorias item=cat }

                                          {if isset($this->dados['categoria_id'])==$cat['id'] }

                                              <option value="{$cat['id']}" SELECTED>{$cat['nome']}</option>
                                          {else}
                                              <option value="{$cat['id']}">{$cat['nome']}</option>
                                          <{/if} 

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