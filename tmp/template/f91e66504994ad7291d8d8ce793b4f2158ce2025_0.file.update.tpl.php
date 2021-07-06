<?php
/* Smarty version 3.1.39, created on 2021-07-02 21:03:08
  from 'C:\xampp\htdocs\projetos\crudsimples\views\pessoa\update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60df62ecccf017_75572417',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f91e66504994ad7291d8d8ce793b4f2158ce2025' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projetos\\crudsimples\\views\\pessoa\\update.tpl',
      1 => 1625207648,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60df62ecccf017_75572417 (Smarty_Internal_Template $_smarty_tpl) {
?>      
      <div class="container">
          <div class="py-5 text-left">
              <a class="btn btn-primary btn-sm" title="Retornar" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
pessoa" role="button"><i
                      class="bi bi-chevron-compact-left"></i></a>

              <h1 class="display-3"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 </h1>
              <h2><?php echo $_smarty_tpl->tpl_vars['subtitulo']->value;?>
</h2>
              <h7><span class="font-italic text-muted"> #<?php if ((isset($_smarty_tpl->tpl_vars['dados']->value['id']))) {?> <?php echo $_smarty_tpl->tpl_vars['dados']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['dados']->value['nome'];?>
 <?php }?></span>
              </h7>
          </div>

          <div class="row">
              <div class="col-md-8 order-md-1">
                  <h4 class="mb-3">Formulário</h4>
                  <form class="needs-validation" id="form-update-pessoa"
                      action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
pessoa/update/<?php echo $_smarty_tpl->tpl_vars['dados']->value['id'];?>
" method="post" novalidate>
                      <input type="hidden" name="update" value="1">
                      <div class="row">
                          <div class="col-md-12 mb-3">
                              <label for="nome">Nome</label>
                              <input type="text" pattern="<?php echo '.{3,}';?>
" class="form-control font-weight-bold" focus
                                  id="nome" name="nome" placeholder=""
                                  value="<?php if ((isset($_smarty_tpl->tpl_vars['dados']->value['nome']))) {?> <?php echo $_smarty_tpl->tpl_vars['dados']->value['nome'];?>
 <?php }?>" required>
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
 <?php }?>"
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

                                  <?php if ((isset($_smarty_tpl->tpl_vars['categorias']->value)) && count($_smarty_tpl->tpl_vars['categorias']->value)) {?>

                                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>

                                          <?php if ($_smarty_tpl->tpl_vars['dados']->value['categoria_id'] == $_smarty_tpl->tpl_vars['cat']->value['id']) {?>

                                              <option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['id'];?>
" SELECTED><?php echo $_smarty_tpl->tpl_vars['cat']->value['nome'];?>
</option>
                                          <?php } else { ?>
                                              <option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['nome'];?>
</option>
                                          <?php }?>

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
