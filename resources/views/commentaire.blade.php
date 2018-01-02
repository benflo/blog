@extends('layouts.app')
<style>
</style>
@section('content')
<form method="post" action="{{url('commentaire')}}" >

    {{csrf_field()}}

    commentaire: <textarea>{{$commentaire->commentaire}}</textarea>
        <input value="valider" type="submit"/>


</form>
    @endsection
