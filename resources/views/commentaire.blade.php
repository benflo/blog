@extends('layouts.app')
<style>
</style>
@section('content')
<form method="post" action="{{url('commentaire')}}" >

    {{csrf_field()}}
@foreach($commentaires as $commentaire)
    commentaire: <textarea>{{$commentaire->commentaire}}</textarea>
        <input value="valider" type="submit"/>
@endforeach

</form>
    @endsection
