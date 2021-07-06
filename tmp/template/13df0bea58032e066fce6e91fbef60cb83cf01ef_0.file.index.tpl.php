<?php
/* Smarty version 3.1.39, created on 2021-07-06 08:32:05
  from 'C:\xampp\htdocs\projetos\crudsimples\views\registro\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e3f8e5d0d267_93698671',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13df0bea58032e066fce6e91fbef60cb83cf01ef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projetos\\crudsimples\\views\\registro\\index.tpl',
      1 => 1625549707,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e3f8e5d0d267_93698671 (Smarty_Internal_Template $_smarty_tpl) {
?>    <div class="container">

        <div class="text-center">
            <form class="form-signin" id="login-form" action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
registro" method="POST">
                <input type="hidden" value="1" name="enviar" />
                <i class="bi bi-person-plus-fill text-primary" style="font-size: 72px;"></i>
                <h1 class="h3 mb-3 font-weight-normal">Faça Seu Registro</h1>
                <label for="nome" class="sr-only">Nome Completo</label>
                <input type="text" id="nome" name="nome" minlength="10" class="form-control" placeholder="Nome Completo"
                    value="<?php if ((isset($_smarty_tpl->tpl_vars['dados']->value['nome']))) {?> <?php echo $_smarty_tpl->tpl_vars['dados']->value['nome'];?>
 <?php }?>" required autofocus>
                <br />
                <label for="usuario" class="sr-only">Nome de usuario</label>
                <input type="text" id="usuario" name="usuario" minlength="3" class="form-control"
                    placeholder="Seu usuario" value="<?php if ((isset($_smarty_tpl->tpl_vars['dados']->value['usuario']))) {?> <?php echo $_smarty_tpl->tpl_vars['dados']->value['usuario'];?>
 <?php }?>" required>
                <br />
                <label for="email" class="sr-only mb-5">Email</label>
                <input type="email" id="email" class="form-control" name="email"
                    value="<?php if ((isset($_smarty_tpl->tpl_vars['dados']->value['email']))) {?> <?php echo $_smarty_tpl->tpl_vars['dados']->value['email'];?>
 <?php }?>" placeholder="E-mail" required>
                <br />
                <label for="senha" class="sr-only mb-5">Senha</label>
                <input type="password" id="senha" class="form-control" name="senha"
                    value="<?php if ((isset($_smarty_tpl->tpl_vars['dados']->value['senha']))) {?> <?php echo $_smarty_tpl->tpl_vars['dados']->value['senha'];?>
 <?php }?>" placeholder="Senha" required>
                <span type="button" id="show_password" name="show_password" class="bi bi-eye-fill"
                    aria-hidden="true"></span>
                <br />
                <label for="confirmasenha" class="sr-only mb-5">Confirme sua Senha</label>
                <input type="password" id="confirmasenha" class="form-control" name="confirmasenha" value=""
                    placeholder="Confirme sua Senha" required>
                <br />


                <div class="checkbox mb-3">

                </div>

                <button class="btn btn-lg btn-primary btn-block" type="submit">Regitrar</button>

            </form>
        </div>
    </div><?php }
}
