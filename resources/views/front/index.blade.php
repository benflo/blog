@extends('layouts.app')

@section('content')

    <section class="col-md-8">
        @isset($lastArticle)
            <h3>Dernier article : </h3>
            {{ $lastArticle->titre }}
            {{$lastArticle->created_at}}


            <h3>Commentaires</h3>
            @isset($commentaires)
                @foreach($commentaires as $commentaire)
                    <div class="post-container">
                        <p>{{$commentaire->commentaire}}</p>
                        <p>{{$commentaire->auteur}}</p>
                        <p>{{$commentaire->created_at}}</p>
                    </div>
                @endforeach
            @endisset
            {!! Form::open() !!}
            {{ Form::token() }}
            {{ Form::label('commentaires', 'Message') }}
            {{ Form::textarea('commentaire') }}
            {{ Form::submit() }}
            {!! Form::close() !!}
        @endisset
    </section>

    <aside class="col-md-4">
        <h3>liste des articles :</h3>
        <ul>
            @isset($articles)
                @foreach($articles as $article)
                    <li>
                        <a href="{{ route('article.show', ['id'=> $article->id]) }}">{{$article->titre}}</a>
                        {{$article->created_at}}
                    </li>
                @endforeach
            @endisset
        </ul>
    </aside>
@endsection