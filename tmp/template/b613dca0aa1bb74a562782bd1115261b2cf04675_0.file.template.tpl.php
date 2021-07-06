<?php
/* Smarty version 3.1.39, created on 2021-07-06 08:31:04
  from 'C:\xampp\htdocs\projetos\crudsimples\views\layout\default\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e3f8a8757f22_62931236',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b613dca0aa1bb74a562782bd1115261b2cf04675' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projetos\\crudsimples\\views\\layout\\default\\template.tpl',
      1 => 1625553059,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e3f8a8757f22_62931236 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"> -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/css/bootstrap-4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/css/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['rota_css'];?>
estilos.css">
        <?php if ((isset($_smarty_tpl->tpl_vars['_layoutParams']->value['css'])) && count($_smarty_tpl->tpl_vars['_layoutParams']->value['css'])) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_layoutParams']->value['css'], 'css');
$_smarty_tpl->tpl_vars['css']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['css']->value) {
$_smarty_tpl->tpl_vars['css']->do_else = false;
?>

            <link rel="stylesheet" href=" <?php echo $_smarty_tpl->tpl_vars['css']->value;?>
 ">

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
    <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['titulo']->value)===null||$tmp==='' ? 'SISTEMA' : $tmp);?>
</title>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">
            <?php echo (($tmp = @$_smarty_tpl->tpl_vars['_layoutParams']->value['configs']['app_name'])===null||$tmp==='' ? 'CRUDMVC' : $tmp);?>

        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDefault"
            aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarDefault">
            <ul class="navbar-nav mr-auto">

                <?php if ((isset($_smarty_tpl->tpl_vars['_layoutParams']->value['menu']))) {?>

                    <?php if (Session::get('autenticado')) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_layoutParams']->value['menu'], 'it');
$_smarty_tpl->tpl_vars['it']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['it']->value) {
$_smarty_tpl->tpl_vars['it']->do_else = false;
?>


                                                        <?php if ((isset($_smarty_tpl->tpl_vars['_layoutParams']->value['item'])) && $_smarty_tpl->tpl_vars['_layoutParams']->value['item'] == $_smarty_tpl->tpl_vars['it']->value['id']) {?>

                                <?php $_smarty_tpl->_assignInScope('_item_style', 'active');?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->_assignInScope('_item_style', '');?>
                            <?php }?>

                            <li class="nav-item <?php echo $_smarty_tpl->tpl_vars['_item_style']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['it']->value['id'];?>
" style="<?php echo $_smarty_tpl->tpl_vars['it']->value['style'];?>
"><a
                                    class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['it']->value['url'];?>
"><i class="<?php echo $_smarty_tpl->tpl_vars['it']->value['icon'];?>
"></i> <?php echo $_smarty_tpl->tpl_vars['it']->value['titulo'];?>
</a></li>

                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php }?>
                <?php }?>
                <?php if (Session::get('autenticado')) {?>
                                    <<?php }?> </ul>

                    <?php if (Session::get('autenticado')) {?>

                           <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Olá, <?php echo strtoupper(Session::get('usuario'));?>

                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                              <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuario/trocarsenha">Trocar Senha</a>
                              <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuario/index">Meus Dados</a>
                              <a class="dropdown-item text-danger" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
login/encerrar">Encerrar Sessão</a>
                            </div>
                          </div>


                    <?php } else { ?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
login" class="btn btn-success ml-3  my-0 my-sm-0"
                            type="submit"><i class="bi bi-lock-fill"></i> Iniciar
                            Sessão</a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
registro" class="btn btn-danger ml-3  my-0 my-sm-0"
                            type="submit"> <i class="bi bi-person-plus-fill"></i> Registrar-se</a>

                    <?php }?>

        </div>
    </nav>

    <main role="main" class="container-fluid">

        <?php if ((isset($_smarty_tpl->tpl_vars['mensagem']->value))) {?>
            <div class="container mt-4" style="display: block;">
                <div class="alert alert-success" role="alert" id="msgsucesso">
                    <?php echo $_smarty_tpl->tpl_vars['mensagem']->value;?>

                </div>
            </div>
        <?php }?>

        <?php if ((isset($_smarty_tpl->tpl_vars['_error']->value))) {?>
            <div class="container mt-4" style="display: block;">
                <div class="alert alert-danger" role="alert" id="msgerror">
                    <?php echo $_smarty_tpl->tpl_vars['_error']->value;?>

                </div>
            </div>
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['_conteudo']->value))) {?>
        <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['_conteudo']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <?php }?>
    </main>
    <footer class="container-fluid text-center">
        <p> Copyright &copy;
            <?php echo date('Y');?>
 <?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['configs']['app_name'];?>

        </p>
    </footer>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->

    <!-- <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
> -->
    <!-- <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"><?php echo '</script'; ?>
> -->
    <!-- <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"><?php echo '</script'; ?>
> -->

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/css/bootstrap-4.6.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
        <?php if ((isset($_smarty_tpl->tpl_vars['_layoutParams']->value['js'])) && count($_smarty_tpl->tpl_vars['_layoutParams']->value['js'])) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_layoutParams']->value['js'], 'js');
$_smarty_tpl->tpl_vars['js']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->do_else = false;
?>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
"><?php echo '</script'; ?>
>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }
echo '<script'; ?>
>
        function pesquisaAjaxPaginacao($url, $update = '_listaPadrao', $tipo = 'html') {

                        //  var url = $(this).attr('href').split('?');
            $.ajax({
                type: "post",
                url: $url,
                dataType: $tipo,
                data: $('.ajaxPesquisa').serialize(),
                success: (
                    function(data) {
                        $($update).html(data);
                    })
            });

        }
    <?php echo '</script'; ?>
>
</body>

</html><?php }
}
