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