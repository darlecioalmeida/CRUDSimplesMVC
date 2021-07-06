<?php
/* Smarty version 3.1.39, created on 2021-07-06 07:33:51
  from 'C:\xampp\htdocs\projetos\crudsimples\views\login\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e3eb3f6e3374_97022332',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61208750963749520445437171dbe7308419d5fe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projetos\\crudsimples\\views\\login\\index.tpl',
      1 => 1625549629,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e3eb3f6e3374_97022332 (Smarty_Internal_Template $_smarty_tpl) {
?>    
    <div class="container">

    <div class="text-center">
    <form class="form-signin" id="login-form" action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
login" method="POST" >
        <input type="hidden" value="1" name="enviar"/>
        <i class="bi bi-person-badge-fill " style="font-size: 72px;"></i>
        <h1 class="h3 mb-3 font-weight-normal">Faça login</h1>
        <label for="usuario" class="sr-only">Nome de usuario</label>
        <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Seu usuario" value="<?php if ((isset($_smarty_tpl->tpl_vars['dados']->value['usuario']))) {?> <?php echo $_smarty_tpl->tpl_vars['dados']->value['usuario'];?>
 <?php }?>" required autofocus>
        <br/>
        <label for="senha" class="sr-only mb-5">Senha</label>
        <input type="password" id="senha" class="form-control" name="senha" value="<?php if ((isset($_smarty_tpl->tpl_vars['dados']->value['senha']))) {
echo $_smarty_tpl->tpl_vars['dados']->value['senha'];
}?>" placeholder="Senha" required>
        <span type="button" id="show_password" name="show_password" class="bi bi-eye-fill" aria-hidden="true"></span>
        <br/>
        <div class="checkbox mb-3">
            <label>
            <code>admin / 123456 <br> normal / 123456</code>
            </label>
        </div>
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
        
        </form>
    </div>
    </div><?php }
}
