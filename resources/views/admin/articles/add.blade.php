@extends('layouts.app')
<style>
</style>
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Article</div>
                        <label for="nom"> Titre : </label></br></br>
                        <p contenteditable="true" class="article-titre">"ceci est un titre"</p><br>
                        <label for="nom"> Contenu : </label></br></br>
                        <textarea contenteditable="true" class="article-corps">"ceci est le corps"</textarea></br></br>
                        <button class="article-add" >valider </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h2>image</h2>
    <div>
<figure>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhUQTbg0zMVzP9zF5ZKIvRiXMjpp7QoFqd7rTNc4uyIf8CX2d8Eg" alt><br>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhUQTbg0zMVzP9zF5ZKIvRiXMjpp7QoFqd7rTNc4uyIf8CX2d8Eg" alt><br>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhUQTbg0zMVzP9zF5ZKIvRiXMjpp7QoFqd7rTNc4uyIf8CX2d8Eg" alt><br>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhUQTbg0zMVzP9zF5ZKIvRiXMjpp7QoFqd7rTNc4uyIf8CX2d8Eg" alt><br>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhUQTbg0zMVzP9zF5ZKIvRiXMjpp7QoFqd7rTNc4uyIf8CX2d8Eg" alt><br>
</figure>

    </div>






    @endsection