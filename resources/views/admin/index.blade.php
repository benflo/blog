@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">Mes articles</div>

                <div class="panel-body">
                    @foreach($articles as $article)
                        <li>
                            {{$article->contenu}} - {{$article->created_at}}
                            {!! Form::open(['route' => ['article.activation', $article->id]]) !!}
                                {{ Form::token() }}
                                {{ Form::label('active', 'Publié : ') }}
                                <input type="checkbox" name="active" value="<?php echo $article->active ?>" <?php if ($article->active === 1): {echo "checked";} endif; ?>>
                                {{ Form::submit() }}
                            {!! Form::close() !!}
                            <a href="{{ route('article.delete', ['id' => $article->id]) }}">supprimer</a>
                        </li>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Les derniers commentaires</div>

                <div class="panel-body">
                @foreach($commentaires as $commentaire)
                    <p>{{$commentaire->commentaire}} - {{$commentaire->created_at}}</p>
                    <p>Article: {{$commentaire->article()->first()->titre}}</p>
                    <a href="{{ route('commentaire.edit', ['id'=> $commentaire->id]) }}">modifier</a>
                    <a href="{{ route('commentaire.delete', ['id' => $commentaire->id]) }}">supprimer</a>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
