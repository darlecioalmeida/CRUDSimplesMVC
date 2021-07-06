(function () {


    $("#btnPesquisaAjax").click(function (e) {
        e.preventDefault();
        var url = $(this).attr('href').split('?');
        pesquisaAjax(url, "#_listaPessoa");

    });

    $("#_pesquisaCategoria").change(function () {

        var url = "pessoa/index";

        pesquisaAjax(url, "#_listaPessoa");

    });


    $('#_pesquisa').keydown(function (e) {

        if (e.keyCode == 13) {
            e.preventDefault();
            var url = "pessoa/index";
            pesquisaAjax(url, "#_listaPessoa");

        }
    })


    jQuery(document).on('click', '#_listaPessoa a.delete', function () {
        if (!confirm('Deseja realmente excluir esta Pessoa da base de Dados?')) return false;

        $.ajax({
            type: "post",
            url: jQuery(this).attr('href'),
            dataType: 'json',
            data: $('.ajaxPesquisa').serialize(),
            success: (
                function (data) {

                    if (data.status) {
                        alert(data.resultado);
                        pesquisaAjax("pessoa/index", "#_listaPessoa");
                    } else {
                        alert(data.resultado);
                        return false;
                    }

                })
        });

        return false;
    });



    //Tipos
    /* xml       text/xml ou application/xml
       json      application/json
       script    application/javascript
       html      text/html
   */

    //PESQUISA POR AJAX
    function pesquisaAjax($url, $update, $tipo = 'html') {

        $.ajax({
            type: "post",
            url: $url,
            dataType: $tipo,
            data: $('.ajaxPesquisa').serialize(),
            success: (
                function (data) {
                    $($update).html(data);
                })
        });

    }


})();