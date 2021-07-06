(function () {


  jQuery(document).on('click', 'a.delete', function () {
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
            window.location = "pessoa/index"
          } else {
            alert(data.resultado);
            return false;
          }

        })
    });

    return false;
  });


})();
