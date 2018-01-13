@extends('layouts.app')

@section('content')

    <section class="col-md-8">
        <h3>Dernier article : </h3>
            {{ $lastArticle->titre }}
            {{$lastArticle->created_at}}
        <h3>Commentaires</h3>

        @foreach($commentaires as $commentaire)
            <div class="post-container">
                <p>{{$commentaire->commentaire}}</p>
                <p>{{$commentaire->auteur}}</p>
                <p>{{$commentaire->created_at}}</p>

                @if(Route::has('login'))
                    @auth
                        <a href="{{url ('/commentaire')}}">Modifier</a>
                        <a href="{{url ('/welcome')}}">Supprimer</a><br>
                    @endauth
                @endif
            </div>
        @endforeach
        <form method="post" >
            {{csrf_field()}}
            commentaire: <textarea name="commentaire" id="commentaire"></textarea>
            <input value="valider" type="submit"/>
        </form>
    </section>

    <aside class="col-md-4">
        <h3>liste des articles :</h3>
        <ul>
            @foreach($articles as $article)
                <li>
                    <a href="{{ route('article.show', ['id'=> $article->id]) }}">{{$article->titre}}</a>
                    {{$article->created_at}}
                </li>
            @endforeach
        </ul>
    </aside>
@endsection