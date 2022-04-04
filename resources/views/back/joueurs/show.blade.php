@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Joueur</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
					<th scope='col'>Nom</th>
					<th scope='col'>Prénom</th>
					<th scope='col'>Equipe</th>
					<th scope='col'>Age</th>
					<th scope='col'>Téléphone</th>
					<th scope='col'>Email</th>
					<th scope='col'>Genre</th>
					<th scope='col'>Pays</th>
					<th scope='col'>Rôle</th>
					<th scope='col'>Photo</th>
                    <th scope='col'>Action</th> {{-- show_tr_anchor --}}
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope='row'>{{ $joueur->id }}</td>
					<td>{{ $joueur->nom }}</td>
					<td>{{ $joueur->prenom }}</td>
					<td><a href="{{ route("equipe.show", $joueur->equipe->id ) }}">{{ $joueur->equipe->nom }}</a></td>
					<td>{{ $joueur->age }}</td>
					<td>{{ $joueur->telephone }}</td>
					<td>{{ $joueur->email }}</td>
					<td>{{ $joueur->genre }}</td>
					<td>{{ $joueur->pays }}</td>
					<td>{{ $joueur->role->nom }}</td>
					<td><img src="{{ $joueur->photo->photo_joueur }}" alt=""></td>
                    <td> {{-- show_td_anchor --}}
                        <a class='btn btn-primary' href='{{ route('joueur.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
