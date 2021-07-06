    <div class="container">

        <div class="text-center">
            <form class="form-signin" id="login-form" action="{$_layoutParams.root}registro" method="POST">
                <input type="hidden" value="1" name="enviar" />
                <i class="bi bi-person-plus-fill text-primary" style="font-size: 72px;"></i>
                <h1 class="h3 mb-3 font-weight-normal">Faça Seu Registro</h1>
                <label for="nome" class="sr-only">Nome Completo</label>
                <input type="text" id="nome" name="nome" minlength="10" class="form-control" placeholder="Nome Completo"
                    value="{if isset($dados['nome'])} {$dados['nome']} {/if}" required autofocus>
                <br />
                <label for="usuario" class="sr-only">Nome de usuario</label>
                <input type="text" id="usuario" name="usuario" minlength="3" class="form-control"
                    placeholder="Seu usuario" value="{if isset($dados['usuario'])} {$dados['usuario']} {/if}" required>
                <br />
                <label for="email" class="sr-only mb-5">Email</label>
                <input type="email" id="email" class="form-control" name="email"
                    value="{if isset($dados['email'])} {$dados['email']} {/if}" placeholder="E-mail" required>
                <br />
                <label for="senha" class="sr-only mb-5">Senha</label>
                <input type="password" id="senha" class="form-control" name="senha"
                    value="{if isset($dados['senha'])} {$dados['senha']} {/if}" placeholder="Senha" required>
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
    </div>