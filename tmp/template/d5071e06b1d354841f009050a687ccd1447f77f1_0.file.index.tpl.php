<?php
/* Smarty version 3.1.39, created on 2021-07-06 08:16:43
  from 'C:\xampp\htdocs\projetos\crudsimples\views\categoria\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e3f54b1276b5_14383494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5071e06b1d354841f009050a687ccd1447f77f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projetos\\crudsimples\\views\\categoria\\index.tpl',
      1 => 1625552199,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e3f54b1276b5_14383494 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Principal jumbotron, para a principal mensagem de marketing ou call to action -->
<div class="jumbotron">
    <div class="container">
        <h1 class="display-3">Categorias</h1>
        <p>Lista de Categoria de Pessoas</p>
        <p><a class="btn btn-primary btn-lg" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
categoria/create" role="button"> <i
                    class="bi bi-person-plus-fill"></i> Adicionar novo</a>
            <a class="btn btn-outline-danger btn-lg" target="_blank"
                href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
relatorio/listagemCategorias" role="button"> <i
                    class="bi bi-file-earmark-pdf"></i> Gerar Relátorio</a>
        </p>

    </div>
</div>

<div class="container">
    <div class="row">

        <div class="col-md-12" id="_listaPessoa">
            <div class="table-responsive">

                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Codigo</th>
                            <th scope="col">Categoria</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ((isset($_smarty_tpl->tpl_vars['categorias']->value)) && count($_smarty_tpl->tpl_vars['categorias']->value)) {?>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
                                <tr>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn btn-primary dropdown-toggle btn-sm" type="button"
                                                id="BtnAcao<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id'];?>
" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                Acão
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="BtnAcao<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id'];?>
">
                                                <a class="dropdown-item"
                                                    href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
categoria/update/<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id'];?>
"
                                                    role="button">Editar</a>
                                                <a class="dropdown-item"
                                                    href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
categoria/delete/<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id'];?>
"
                                                    role="button">Excluir</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['categoria']->value['id'];?>
</th>
                                    <td scope="row"><?php echo $_smarty_tpl->tpl_vars['categoria']->value['nome'];?>
</td>
                                </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        <?php } else { ?>
                            <p>
                            <h4> Não há dados cadastrado</h4>
                        <?php }?>

                    </tbody>
                </table>
            </div>
            <div class="">

                <?php if ((isset($_smarty_tpl->tpl_vars['paginacao']->value))) {?>
                    <?php echo $_smarty_tpl->tpl_vars['paginacao']->value;?>

                <?php }?>
            </div>
        </div>

    </div><?php }
}
