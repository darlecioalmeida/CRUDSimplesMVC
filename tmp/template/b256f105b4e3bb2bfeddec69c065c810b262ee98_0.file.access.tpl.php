<?php
/* Smarty version 3.1.39, created on 2021-07-02 08:47:30
  from 'C:\xampp\htdocs\projetos\crudsimples\views\errors\access.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60deb68276f3d9_24078018',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b256f105b4e3bb2bfeddec69c065c810b262ee98' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projetos\\crudsimples\\views\\errors\\access.tpl',
      1 => 1625208308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60deb68276f3d9_24078018 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container mt-3">

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
            <h2><?php echo $_smarty_tpl->tpl_vars['subtitulo']->value;?>
</h2>
            <br />

            <?php if ((isset($_smarty_tpl->tpl_vars['mensagem_error']->value))) {?>
                <div class="alert alert-danger" role="alert" id="msgerror"><?php echo $_smarty_tpl->tpl_vars['mensagem_error']->value;?>
</div>

            <?php }?>

            <?php if ((isset($_smarty_tpl->tpl_vars['mensagem']->value))) {?>
                <div class="alert alert-success" role="alert" id="msgsucesso"><?php echo $_smarty_tpl->tpl_vars['mensagem']->value;?>
</div>

            <?php }?>

            <?php if ((isset($_smarty_tpl->tpl_vars['_error']->value))) {?>

                <div class="alert alert-danger" role="alert" id="msgerror"><?php echo $_smarty_tpl->tpl_vars['_error']->value;?>
</div>

            <?php }?>


            <br />
            <a class="btn btn-primary btn-lg" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
" role="button"><i class="bi bi-house"></i>
                Início</a>
            <a class="btn btn-info btn-lg my-3 " href="javascript:history.back()" role="button"><i
                    class="bi bi-chevron-compact-left"></i> Voltar</a>
            <?php if (!Session::get('autenticado')) {?>

                <a class="btn btn-danger btn-lg" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
login" role="button"><i
                        class="bi bi-chevron-bar-right"></i> Iniciar Sessão</a>

            <?php }?>

        </div>
    </div>

</div><?php }
}
