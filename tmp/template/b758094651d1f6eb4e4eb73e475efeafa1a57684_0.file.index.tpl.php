<?php
/* Smarty version 3.1.39, created on 2021-07-06 08:17:09
  from 'C:\xampp\htdocs\projetos\crudsimples\views\pessoa\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e3f565a6a876_95519143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b758094651d1f6eb4e4eb73e475efeafa1a57684' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projetos\\crudsimples\\views\\pessoa\\index.tpl',
      1 => 1625552054,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e3f565a6a876_95519143 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Principal jumbotron, para a principal mensagem de marketing ou call to action -->
<div class="jumbotron">
    <div class="container">
        <h1 class="display-3">Pessoas</h1>
        <p>Bem vindo a lista de Pessoas, aqui voce pode Adicionar, Editar e Excluir. É possivel filtrar pessoas usando
            Ajax e utilizar paginação.</p>
        <p><a class="btn btn-primary btn-lg" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
pessoa/create" role="button"> <i
                    class="bi bi-person-plus-fill"></i> Adicionar novo
            </a>
            <a class="btn btn-outline-danger btn-lg" target="_blank"
                href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
relatorio/listagemPessoas" role="button"> <i
                    class="bi bi-file-earmark-pdf"></i> Gerar Relátorio</a>
        </p>
    </div>
</div>

<div class="container">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="input-group">
                    <input type="text" class="form-control ajaxPesquisa" focus id="_pesquisa" name="_pesquisa"
                        placeholder="Pesquisar nome, código ou email "
                        value="<?php if ((isset($_smarty_tpl->tpl_vars['dados']->value['nome']))) {?> <?php echo $_smarty_tpl->tpl_vars['dados']->value['nome'];?>
 <?php }?>" required>
                    <span class="input-group-append">
                        <a id="btnPesquisaAjax" class="btn  btn-primary border-start-0 border  ms-n3 mb-3"
                            href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
pessoa/index">
                            <i class="bi bi-search"></i>
                        </a>

                    </span>

                </div>
            </div>
            <div class="col-md-3">
                <div class="input-group">

                    <select class="custom-select d-block w-100 mb-3 ajaxPesquisa" id="_pesquisaCategoria"
                        name="categoria_id" required>
                        <option value="">Categoria...</option>

                        <?php if ((isset($_smarty_tpl->tpl_vars['categorias']->value)) && count($_smarty_tpl->tpl_vars['categorias']->value)) {?>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>

                                <?php if ((isset($_smarty_tpl->tpl_vars['dados']->value['categoria_id'])) == $_smarty_tpl->tpl_vars['cat']->value['id']) {?>

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



                </div>
            </div>

        </div>
    </div>

    <div class="row">

        <?php ob_start();
echo "_lista.tpl";
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['_layoutParams']->value['rootview']).$_prefixVariable1, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    </div><?php }
}
