<?php
/* Smarty version 3.1.39, created on 2021-07-03 19:09:31
  from 'C:\xampp\htdocs\projetos\crudsimples\views\pessoa\lista.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e099cb9609d5_30375241',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ad39a13ce3aa0edb1cad3db226e2a7deeea9c5d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projetos\\crudsimples\\views\\pessoa\\lista.tpl',
      1 => 1625329889,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e099cb9609d5_30375241 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-12">
            <div class="table-responsive">

                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Codigo</th>
                            <th scope="col">Nome</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Categoria</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ((isset($_smarty_tpl->tpl_vars['pessoas']->value)) && count($_smarty_tpl->tpl_vars['pessoas']->value)) {?>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pessoas']->value, 'pessoa');
$_smarty_tpl->tpl_vars['pessoa']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pessoa']->value) {
$_smarty_tpl->tpl_vars['pessoa']->do_else = false;
?>
                                <tr>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn btn-primary dropdown-toggle btn-sm" type="button"
                                                id="BtnAcao<?php echo $_smarty_tpl->tpl_vars['pessoa']->value['id'];?>
" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                Acão
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="BtnAcao<?php echo $_smarty_tpl->tpl_vars['pessoa']->value['id'];?>
">
                                                <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
pessoa/update/<?php echo $_smarty_tpl->tpl_vars['pessoa']->value['id'];?>
"
                                                    role="button">Editar</a>
                                                <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
pessoa/delete/<?php echo $_smarty_tpl->tpl_vars['pessoa']->value['id'];?>
"
                                                    role="button">Excluir</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['pessoa']->value['id'];?>
</th>
                                    <td scope="row"><?php echo $_smarty_tpl->tpl_vars['pessoa']->value['nome'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['pessoa']->value['email'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['pessoa']->value['categoria'];?>
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
        </div><?php }
}
