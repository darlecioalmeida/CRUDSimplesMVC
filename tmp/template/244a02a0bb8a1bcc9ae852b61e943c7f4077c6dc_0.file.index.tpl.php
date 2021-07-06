<?php
/* Smarty version 3.1.39, created on 2021-07-03 15:29:00
  from 'C:\xampp\htdocs\projetos\crudsimples\views\ajax\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e0661cef2139_49381799',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '244a02a0bb8a1bcc9ae852b61e943c7f4077c6dc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projetos\\crudsimples\\views\\ajax\\index.tpl',
      1 => 1625318938,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e0661cef2139_49381799 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <div class="row">
    <div class="mt-3">
        <div class="col-md-12">
            <form name="ajaxForm" class="" id="ajaxForm" action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ajax/index" type="POST">
            <div class="form-group">
            <label class="label">Nome</label>
                <input name="categoria" class="form-control" id="categoria" value="" />
            </div>
            <div class="form-group">
            <label class="label">Acao</label>
                <input name="acao" class="form-control" id="insere" value="" />
            </div>
                <button id="btnInsereAjax" type="submit"  class="btn btn-primary">INSERIR
                    VIA AJAX</button>

            </form>
        </div>
        </div>
    </div>
</div><?php }
}
