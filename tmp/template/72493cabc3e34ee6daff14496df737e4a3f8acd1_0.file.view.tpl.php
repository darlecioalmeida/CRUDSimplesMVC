<?php
/* Smarty version 3.1.39, created on 2021-07-06 05:07:18
  from 'C:\xampp\htdocs\projetos\crudsimples\views\pessoa\view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e3c8e6148254_12893183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72493cabc3e34ee6daff14496df737e4a3f8acd1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projetos\\crudsimples\\views\\pessoa\\view.tpl',
      1 => 1625540834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e3c8e6148254_12893183 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
          <div class="py-5 text-left">
              <a class="btn btn-primary btn-sm" href="<?php echo BASE_URL;?>
pessoa" role="button"><i class="bi bi-arrow-left"></i> Voltar</a>
            <?php if ((isset($_smarty_tpl->tpl_vars['dados']->value['id']))) {?>
              <a class="btn btn-info btn-sm" href="<?php echo BASE_URL;?>
pessoa/update/<?php echo $_smarty_tpl->tpl_vars['dados']->value['id'];?>
" role="button"><i class="bi bi-pencil"></i> Editar</a>
              <a class="btn btn-danger btn-sm delete" href="<?php echo BASE_URL;?>
pessoa/delete/<?php echo $_smarty_tpl->tpl_vars['dados']->value['id'];?>
" role="button" id="_btnDelete"><i class="bi bi-trash"></i> Excluir</a>
            <?php }?>

              <h1 class="display-3 mt-3"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
              <h2><?php if ((isset($_smarty_tpl->tpl_vars['dados']->value['nome']))) {?> <?php echo $_smarty_tpl->tpl_vars['dados']->value['id'];?>
 - <?php echo $_smarty_tpl->tpl_vars['dados']->value['nome'];
}?></h2>
          </div>

          <div class="row">
              <div class="col-md-8 order-md-1">
                      <span type="hidden" name="salvar" value="1">
                      <div class="row">
                          <div class="col-md-12 mb-3">
                              <label for="nome">Nome</label>
                              <span class="form-control">
                            <?php if ((isset($_smarty_tpl->tpl_vars['dados']->value['nome']))) {?> <?php echo $_smarty_tpl->tpl_vars['dados']->value['nome'];
}?>
                                    </span>
                          </div>

                      </div>
                      <div class="row">
                          <div class="col-md-6 mb-3 ">
                              <label for="email">Email: </label>
                              <span class="form-control">
                                    <?php if ((isset($_smarty_tpl->tpl_vars['dados']->value['email']))) {?> <?php echo $_smarty_tpl->tpl_vars['dados']->value['email'];?>
 <?php }?>
                              </span>
                              
                          </div>
                      </div>
                          <div class="row">
                          <div class="col-md-6 mb-3">
                              <label for="categoria_id">Categoria:</label>
                              <span class="form-control">
                              <?php echo $_smarty_tpl->tpl_vars['dados']->value['categoria'];?>

                              </span>
                          </div>

                      </div>
                                          
                      <p><br /></p>

              </div>
          </div>
          <div class="mb-6"></div>

          
</div>
<?php }
}
