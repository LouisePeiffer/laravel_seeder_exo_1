@extends('layouts.index')

@section('content')
    <h3>Liste des personnes :</h3>
    <a href="{{route('clearTable')}}"><button class="btn btn-danger">Delete All</button></a>
    <div class="row">
        @foreach ($allPersonnes as $personne)
            <div class="col-12">
                {{$personne->nom}}
            </div>
            <a href="{{route('show.personne', $personne->id)}}" class="btn btn-success">Show</a>
            <a href="{{route('edit.personne', $personne->id)}}" class="btn btn-warning">Edit</a>
            <form method="POST" action="{{route('destroy.personne', $personne->id)}}">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        @endforeach
    </div>
@endsection