<div class="container">
          <div class="py-5 text-left">
              <a class="btn btn-primary btn-sm" href="{BASE_URL}pessoa" role="button"><i class="bi bi-arrow-left"></i> Voltar</a>
            {if isset($dados['id'])}
              <a class="btn btn-info btn-sm" href="{BASE_URL}pessoa/update/{$dados['id']}" role="button"><i class="bi bi-pencil"></i> Editar</a>
              <a class="btn btn-danger btn-sm delete" href="{BASE_URL}pessoa/delete/{$dados['id']}" role="button" id="_btnDelete"><i class="bi bi-trash"></i> Excluir</a>
            {/if}

              <h1 class="display-3 mt-3">{$titulo}</h1>
              <h2>{if isset($dados['nome'])} {$dados['id']} - {$dados['nome']}{/if}</h2>
          </div>

          <div class="row">
              <div class="col-md-8 order-md-1">
                      <span type="hidden" name="salvar" value="1">
                      <div class="row">
                          <div class="col-md-12 mb-3">
                              <label for="nome">Nome</label>
                              <span class="form-control">
                            {if isset($dados['nome'])} {$dados['nome']}{/if}
                                    </span>
                          </div>

                      </div>
                      <div class="row">
                          <div class="col-md-6 mb-3 ">
                              <label for="email">Email: </label>
                              <span class="form-control">
                                    {if isset($dados['email'])} {$dados['email']} {/if}
                              </span>
                              
                          </div>
                      </div>
                          <div class="row">
                          <div class="col-md-6 mb-3">
                              <label for="categoria_id">Categoria:</label>
                              <span class="form-control">
                              {$dados['categoria']}
                              </span>
                          </div>

                      </div>
                                          
                      <p><br /></p>

              </div>
          </div>
          <div class="mb-6"></div>

          
</div>
