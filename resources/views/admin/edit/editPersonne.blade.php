@extends('layouts.index')

@section('content')
    <h3>Edit une personne</h3>
    <form action="{{route('update.personne', $personne->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" value="{{$personne->nom}}" class="form-control" id="nom" name="nom" placeholder="Nom de la personne">
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="text" value="{{$personne->age}}" class="form-control" id="age" name="age" placeholder="Age de la personne">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" value="{{$personne->email}}" class="form-control" id="email" name="email" placeholder="Email de la personne">
        </div>
        <div class="form-group">
            <label for="telephone">Telephone</label>
            <input type="text" value="{{$personne->telephone}}" class="form-control" id="telephone" name="telephone" placeholder="Telephone de la personne">
        </div>
        <button class="btn btn-primary" type="submit">Enregistrer</button>
    </form>
@endsection