@extends('layouts.app')

@section('content')

<h1>{{$article->titre}}</h1>
<p>écrit par : {{ $article->user()->first()->name }}</p>
{{$article->contenu}}<br>
{{$article->created_at}}<br><br>

@endsection