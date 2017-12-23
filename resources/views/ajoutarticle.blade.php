@extends('layouts.app')
<style>
</style>
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Article</div>
                    <form method="post">
                        {{ csrf_field() }}
                        <label for="nom"> Titre : </label></br></br>
                        <p contenteditable="true"> "ceci est un titre"</p></br></br>
                        <label for="nom"> Contenu : </label></br></br>
                        <p contenteditable="true">"ceci est le corp"</p></br></br>
                        <button value="valider">valider </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        $(function() {
            $('#register').click(function () {
                $('#myModal'.modal());
                
            });
            $(document).on('submit', '#article', function(e) {
                e.preventDefault();
                $('input+small').text('');
                $('input').parent().removeClass('has-error');

                $.ajax({
                    method: $(this).attr('method'),
                    url: $(this).attr('action'),
                    data: $(this).serialize(),
                    dataType: "json"
                })
                    .done(function(data) {
                        $('.alert-success').removeClass('hidden');
                        $('#myModal').modal('hide');
                    })
                    .fail(function(data) {
                        $.each(data.responseJSON, function (key, value) {
                            var input = '#article input[name=' + key + ']';
                            $(input + '+small').text(value);
                            $(input).parent().addClass('has-error');
                        });
                    });
            });

        })

    </script>
    @endsection