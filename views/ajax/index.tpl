<div class="container">
    <div class="row">
    <div class="mt-3">
        <div class="col-md-12">
            <form name="ajaxForm" class="" id="ajaxForm" action="{$_layoutParams.root}ajax/index" type="POST">
            <div class="form-group">
            <label class="label">Nome</label>
                <input name="categoria" class="form-control" id="categoria" value="" />
            </div>
            <div class="form-group">
            <label class="label">Acao</label>
                <input name="acao" class="form-control" id="insere" value="" />
            </div>
                <button id="btnInsereAjax" type="submit"  class="btn btn-primary">INSERIR
                    VIA AJAX</button>

            </form>
        </div>
        </div>
    </div>
</div>