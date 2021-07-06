    
    <div class="container">

    <div class="text-center">
    <form class="form-signin" id="login-form" action="{$_layoutParams.root}login" method="POST" >
        <input type="hidden" value="1" name="enviar"/>
        <i class="bi bi-person-badge-fill " style="font-size: 72px;"></i>
        <h1 class="h3 mb-3 font-weight-normal">Faça login</h1>
        <label for="usuario" class="sr-only">Nome de usuario</label>
        <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Seu usuario" value="{if isset($dados['usuario'])} {$dados['usuario']} {/if}" required autofocus>
        <br/>
        <label for="senha" class="sr-only mb-5">Senha</label>
        <input type="password" id="senha" class="form-control" name="senha" value="{if isset($dados['senha'])}{$dados['senha']}{/if}" placeholder="Senha" required>
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
    </div>