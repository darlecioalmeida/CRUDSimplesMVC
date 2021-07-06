<!-- Principal jumbotron, para a principal mensagem de marketing ou call to action -->
<div class="jumbotron">
    <div class="container">
        

            {if Session::get('autenticado')}
                <h1 class="display-3">Bem vindo!  {Session::get('usuario')|capitalize:true}!</h1>
            <h4>Seu Usuario está com permisão: <span class="badge badge-success">
                    {Session::get('nivel')|capitalize:true}</span></h4>
            <p>Você pode alternar entre os nível de acesso pelo banco de dados</p>
            <p> Class que gerencia as persmissões por nível de acesso : <br><code>{ROOT}app{DS}Session.php</code> </p>

            <p> Uso nos controladores : <br><code> Session::acessoRestrito(array('normal'),true); True = Restringe pro admin, false=bypass pro admin</code><br>
            Em uso com ajax , não redireciona. <code>if(!Session::acessoView('admin')) </code>
                 </p>
            <p><code>admin= 3; gerente= 2; normal= 1;</code></p>
           

            <p class="mt-3">A senha é gerado com HASH sha1 que pde ser gerada executando essa comando na Index.php
                <br><code> echo Hash::getHash('sha1','1234', HASH_KEY);exit; //GERAR HASH SENHA</code>
                <br>Para alterar tempo de Sessão logado em :<code> {ROOT}{DS}app{DS}Config.php</code> alterando o limite em minutos:
                <code> define('SESSION_TIME', 10); </code>
            </p>
            <hr class="my-4">
            {*<p class="mt-3"><a class="btn btn-primary btn-lg"
            href="{$_layoutParams.root}usuario/edit/{Session::get('usuario_id')}" role="button">Alterar
            permissão</a></p>*}
        
        
        {else}
            <h1 class="display-3">Bem vindo, Visitante!</h1>
            <p>Se você ainda não tem um usuario de acesso. É possivel efetuar seu registro e receber por Email sua chave de ativação. basta cliclar no botão Registrar-se e inserir os dados. </p>
            <p> Biblioteca Utilizada : <br><code>{ROOT}libs{DS}PHPMailer</code> </p>

            <p> Para que email funcione corretamente é preciso Alterar os dados de EMAIL : <br>:<code> {ROOT}app{DS}Config.php</code> alterando as variaveis:
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
        
        {/if}
    </div>
</div>

<div class="container">

</div>