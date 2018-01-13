@extends('layouts.app')

@section('content')
    <h3>page d'édition de commentaire</h3>

    {!! Form::open() !!}
        {{ Form::token() }}
        {{ Form::label('commentaire', 'Message :') }}
        {{ Form::textarea('commentaire', $commentaire->commentaire) }}
        {{ Form::submit() }}
    {!! Form::close() !!}
@endsection
