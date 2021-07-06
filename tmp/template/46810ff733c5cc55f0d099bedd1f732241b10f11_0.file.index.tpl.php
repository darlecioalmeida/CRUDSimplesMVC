<?php
/* Smarty version 3.1.39, created on 2021-07-02 08:48:08
  from 'C:\xampp\htdocs\projetos\crudsimples\views\errors\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60deb6a8bcc807_69135354',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46810ff733c5cc55f0d099bedd1f732241b10f11' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projetos\\crudsimples\\views\\errors\\index.tpl',
      1 => 1625208486,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60deb6a8bcc807_69135354 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 </h1>
            <h2><?php echo $_smarty_tpl->tpl_vars['subtitulo']->value;?>
</h2>
            <br />
            <div class="alert alert-danger" role="alert" id="error"><?php if ((isset($_smarty_tpl->tpl_vars['mensagem']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['mensagem']->value;?>
 <?php }?></div>
                <br />
                <a class="btn btn-primary btn-lg" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
" role="button"><i
                        class="bi bi-chevron-compact-left"></i>Início</a>
                <a class="btn btn-info btn-lg my-3" href="javascript:history.back()" role="button"><i
                        class="bi bi-chevron-compact-left"></i> Voltar</a>

            </div>
        </div>

    </div><?php }
}
