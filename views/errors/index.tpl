<div class="container">

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">{$titulo} </h1>
            <h2>{$subtitulo}</h2>
            <br />
            <div class="alert alert-danger" role="alert" id="error">{if isset($mensagem)} {$mensagem} {/if}</div>
                <br />
                <a class="btn btn-primary btn-lg" href="{$_layoutParams.root}" role="button"><i
                        class="bi bi-chevron-compact-left"></i>Início</a>
                <a class="btn btn-info btn-lg my-3" href="javascript:history.back()" role="button"><i
                        class="bi bi-chevron-compact-left"></i> Voltar</a>

            </div>
        </div>

    </div>