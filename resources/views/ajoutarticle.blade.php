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
                        <input contenteditable="true" type="text" name="titre" id="titre" value="ceci est un titre"/></br></br>
                        <label for="nom"> Contenu : </label></br></br>
                        <textarea contenteditable="true" name="contenu" id="contenu">ceci est le corp</textarea></br></br>
                        <button value="valider">valider </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection