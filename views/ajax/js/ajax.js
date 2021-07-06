(function () {


    $("#ajaxForm").ajaxSubmit({url: base_url+'ajax', type: 'post'});



   /* $("#btnInsereAjax").click(function (e) {

        e.preventDefault();

        $.ajax({
            type: "post",
            url: "/ajax/index",
            //dataType: "json",
            data: $('#ajaxForm').serialize(),
            success: (
                function (data) {
                    alert('tudo ok');
                })
        })

    });*/


})();