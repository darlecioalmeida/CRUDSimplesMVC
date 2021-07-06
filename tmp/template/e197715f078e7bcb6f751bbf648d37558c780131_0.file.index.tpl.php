<?php
/* Smarty version 3.1.39, created on 2021-07-06 07:31:43
  from 'C:\xampp\htdocs\projetos\crudsimples\views\index\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e3eabfb7b577_58326790',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e197715f078e7bcb6f751bbf648d37558c780131' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projetos\\crudsimples\\views\\index\\index.tpl',
      1 => 1625549496,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e3eabfb7b577_58326790 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\projetos\\crudsimples\\libs\\smarty\\libs\\plugins\\modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
?>
<!-- Principal jumbotron, para a principal mensagem de marketing ou call to action -->
<div class="jumbotron">
    <div class="container">
        

            <?php if (Session::get('autenticado')) {?>
                <h1 class="display-3">Bem vindo!  <?php echo smarty_modifier_capitalize(Session::get('usuario'),true);?>
!</h1>
            <h4>Seu Usuario está com permisão: <span class="badge badge-success">
                    <?php echo smarty_modifier_capitalize(Session::get('nivel'),true);?>
</span></h4>
            <p>Você pode alternar entre os nível de acesso pelo banco de dados</p>
            <p> Class que gerencia as persmissões por nível de acesso : <br><code><?php echo ROOT;?>
app<?php echo DS;?>
Session.php</code> </p>

            <p> Uso nos controladores : <br><code> Session::acessoRestrito(array('normal'),true); True = Restringe pro admin, false=bypass pro admin</code><br>
            Em uso com ajax , não redireciona. <code>if(!Session::acessoView('admin')) </code>
                 </p>
            <p><code>admin= 3; gerente= 2; normal= 1;</code></p>
           

            <p class="mt-3">A senha é gerado com HASH sha1 que pde ser gerada executando essa comando na Index.php
                <br><code> echo Hash::getHash('sha1','1234', HASH_KEY);exit; //GERAR HASH SENHA</code>
                <br>Para alterar tempo de Sessão logado em :<code> <?php echo ROOT;
echo DS;?>
app<?php echo DS;?>
Config.php</code> alterando o limite em minutos:
                <code> define('SESSION_TIME', 10); </code>
            </p>
            <hr class="my-4">
                    
        
        <?php } else { ?>
            <h1 class="display-3">Bem vindo, Visitante!</h1>
            <p>Se você ainda não tem um usuario de acesso. É possivel efetuar seu registro e receber por Email sua chave de ativação. basta cliclar no botão Registrar-se e inserir os dados. </p>
            <p> Biblioteca Utilizada : <br><code><?php echo ROOT;?>
libs<?php echo DS;?>
PHPMailer</code> </p>

            <p> Para que email funcione corretamente é preciso Alterar os dados de EMAIL : <br>:<code> <?php echo ROOT;?>
app<?php echo DS;?>
Config.php</code> alterando as variaveis:
            <code>  <br>
            <br>define('EMAIL_SMTPDEBUG', false); //SMTP::DEBUG_SERVER;     //HABILITA OU NAO O DEBUG DE ENVIO
            <br>define('EMAIL_HOST', 'smtp.gmail.com');                     //SETA O SERVIDOR QUE VAI ENVIAR EMAIL
            <br>define('EMAIL_SMTPAUTH', true);                             //HABILITA AUTENTICACAO SMTP
            <br>define('EMAIL_USUARIO', '****email****');            //USUARIO SMTP
            <br>define('EMAIL_SENHA', '****senha****');                  //SENHA SMTP pode ser gerada Senha API / Ou senha normal 
            <br>define('EMAIL_PORTA', 587);                                 //PORTA DE ENVIO 
            <br>define('EMAIL_USUARIO_ENVIO','****email_envio****'); 
            <br>define('EMAIL_USUARIO_NOME', 'CrudSimples');
            <br>define('EMAIL_USUARIO_TIULO', 'CrudSimples MVC'); </code> </p>
        
        <?php }?>
    </div>
</div>

<div class="container">

</div><?php }
}
