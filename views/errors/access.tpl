<div class="container mt-3">

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">{$titulo}</h1>
            <h2>{$subtitulo}</h2>
            <br />

            {if isset($mensagem_error)}
                <div class="alert alert-danger" role="alert" id="msgerror">{$mensagem_error}</div>

            {/if}

            {if isset($mensagem)}
                <div class="alert alert-success" role="alert" id="msgsucesso">{$mensagem}</div>

            {/if}

            {if isset($_error)}

                <div class="alert alert-danger" role="alert" id="msgerror">{$_error}</div>

            {/if}


            <br />
            <a class="btn btn-primary btn-lg" href="{$_layoutParams.root}" role="button"><i class="bi bi-house"></i>
                Início</a>
            <a class="btn btn-info btn-lg my-3 " href="javascript:history.back()" role="button"><i
                    class="bi bi-chevron-compact-left"></i> Voltar</a>
            {if !Session::get('autenticado')}

                <a class="btn btn-danger btn-lg" href="{$_layoutParams.root}login" role="button"><i
                        class="bi bi-chevron-bar-right"></i> Iniciar Sessão</a>

            {/if}

        </div>
    </div>

</div>