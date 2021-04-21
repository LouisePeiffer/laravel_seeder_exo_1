@extends('layouts.index')

@section('content')
    <a href="{{route('personnesList')}}">Retour</a>
    <br>
    {{$personne->nom}}
    {{$personne->age}}
    {{$personne->email}}
    {{$personne->telephone}}
@endsection