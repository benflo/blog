@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Mes articles</div>

                <div class="panel-body">
                    @foreach($articles as $article)
                            <li>{{$article->contenu}}</li>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
