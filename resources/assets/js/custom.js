/**
 * Created by benjamin on 26/12/2017.
 */
$('.ajoutarticles').on('click', function (e) {
    e.preventDefault();
    var titre = $.trim($('.titre').text());
    var contenu = $.trim($('.contenu').text());

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: '/ajoutarticles/ajax',
        type: 'POST',
        data: {
            titre: titre,
            body: contenu
        },
        success: function (data) {
            //
        }
    });
});