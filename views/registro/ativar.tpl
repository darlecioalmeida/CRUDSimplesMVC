<div class="container">

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">{if isset($titulo)} {$titulo} {/if} </h1>
            <h2>{if isset($subtitulo) {$subtitulo} {/if}</h2>
            <br />
            <a class="btn btn-primary btn-lg" href="{$_layoutParams.root}" role="button"><i class="bi bi-house"></i>
                Início</a>
            {if !Session::get('autenticado')}

                <a class="btn btn-danger btn-lg" href="{$_layoutParams.root}login" role="button"><i
                        class="bi bi-chevron-bar-right"></i> Iniciar Sessão</a>

            {/if}

        </div>
    </div>

</div>