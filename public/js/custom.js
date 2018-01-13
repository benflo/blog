$('.article-add').on('click', function (e) {
    e.preventDefault();
    var titre = $.trim($('.article-titre').text());
    var contenu = $.trim($('.article-corps').val());

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: '/ajoutarticle/ajax',
        type: 'POST',
        data: {
            titre: titre,
            contenu: contenu
        },
        success: function (data) {
            //
        }
    });
});