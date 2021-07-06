<?php
/* Smarty version 3.1.39, created on 2021-07-06 02:53:31
  from 'C:\xampp\htdocs\projetos\crudsimples\views\pessoa\create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e3a98b58dd54_80153646',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4191494e05ca3a9568d793e3739d8b55788d0742' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projetos\\crudsimples\\views\\pessoa\\create.tpl',
      1 => 1625532809,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e3a98b58dd54_80153646 (Smarty_Internal_Template $_smarty_tpl) {
?>      
      <div class="container">
          <div class="py-5 text-left">
              <a class="btn btn-primary btn-sm" href="<?php echo BASE_URL;?>
pessoa" role="button">VOLTAR &laquo;</a>

              <h1 class="display-3"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
              <h2><?php echo $_smarty_tpl->tpl_vars['subtitulo']->value;?>
</h2>
          </div>

          <div class="row">
              <div class="col-md-8 order-md-1">
                  <h4 class="mb-3">Formulário</h4>
                  <form class="needs-validation" id="form-create-pessoa" action="<?php echo BASE_URL;?>
pessoa/create" method="post"
                      novalidate>
                      <input type="hidden" name="salvar" value="1">
                      <div class="row">
                          <div class="col-md-12 mb-3">
                              <label for="nome">Nome</label>
                              <input type="text" class="form-control " focus id="nome" name="nome" placeholder=""
                                  value="<?php if ((isset($_smarty_tpl->tpl_vars['dados']->value['nome']))) {?> <?php echo $_smarty_tpl->tpl_vars['dados']->value['nome'];?>
<<?php }?>" required>
                              <div class="invalid-feedback">
                                  É obrigatório inserir um Nome válido.
                              </div>
                          </div>

                      </div>
                      <div class="row">
                          <div class="col-md-6 mb-3">
                              <label for="email">Email <span class="text-muted">(Opcional)</span></label>
                              <input type="email" class="form-control" id="email" name="email"
                                  value="<?php if ((isset($_smarty_tpl->tpl_vars['dados']->value['email']))) {?> <?php echo $_smarty_tpl->tpl_vars['dados']->value['email'];?>
 <<?php }?>"
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

                                  <?php if ((isset($_smarty_tpl->tpl_vars['categorias']->value)) && count($_smarty_tpl->tpl_vars['categorias']->value)) {?>

                                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>

                                          <?php if ((isset($_smarty_tpl->tpl_vars['this']->value->dados['categoria_id'])) == $_smarty_tpl->tpl_vars['cat']->value['id']) {?>

                                              <option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['id'];?>
" SELECTED><?php echo $_smarty_tpl->tpl_vars['cat']->value['nome'];?>
</option>
                                          <?php } else { ?>
                                              <option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['nome'];?>
</option>
                                          <<?php }?> 

                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
                                        
                                      <?php }?> 

                                  

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
          <div class="mb-6"></div><?php }
}
