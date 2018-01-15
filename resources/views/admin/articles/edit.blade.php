@extends('layouts.app')

@section('content')
    <h3>page d'édition d'article</h3>

    {!! Form::open() !!}
        {{ Form::token() }}
        {{ Form::label('titre') }}<br>
        {{ Form::text('titre', $articles->titre) }}<br>
        {{ form::label('contenu') }}<br>
        {{ Form::textarea('contenu', $articles->contenu) }}<br>

        {{ Form::submit() }}
    {!! Form::close() !!}
@endsection
