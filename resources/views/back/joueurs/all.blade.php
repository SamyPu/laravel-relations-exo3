@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Joueurs</h1>
        @if (session()->has('message'))
            <div class='alert alert-success'>
                {{ session()->get('message') }}
            </div>
        @endif
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <table class='table table-striped'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
					<th scope='col'>Nom</th>
					<th scope='col'>Prénom</th>
					<th scope='col'>Equipe</th>

					{{-- <th scope='col'>Age</th>
					<th scope='col'>Téléphone</th>
					<th scope='col'>Email</th>
					<th scope='col'>Genre</th>
					<th scope='col'>Pays</th>
					<th scope='col'>Rôle</th> --}}
					{{-- <th scope='col'>Photo</th> --}}

                    <th scope='col'>Action</th> {{-- all_tr_anchor --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($joueurs as $joueur)
                    <tr>
                        <td scope='row'>{{ $joueur->id }}</td>
						<td>{{ $joueur->nom }}</td>
						<td>{{ $joueur->prenom }}</td>
						<td><a href="{{ route("equipe.show", $joueur->equipe->id ) }}">{{ $joueur->equipe->nom }}</a></td>


						{{-- <td>{{ $joueur->age }}</td>
						<td>{{ $joueur->telephone }}</td>
						<td>{{ $joueur->email }}</td>
						<td>{{ $joueur->genre }}</td>
						<td>{{ $joueur->pays }}</td>
						<td>{{ $joueur->role->nom }}</td> --}}
						{{-- <td><img src="{{ $joueur->photo->photo_joueur }}" alt=""></td> --}}

                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                <form action='{{ route('joueur.destroy', $joueur->id) }}' method='post'>
                                    @csrf
                                    @method('delete')
                                    <button class='btn btn-danger mx-1' type=submit>Delete</button>
                                </form>
                                <a class='btn btn-primary mx-1' href='{{ route('joueur.edit', $joueur->id) }}' role='button'>Edit</a>
                                <a class='btn btn-primary mx-1' href='{{ route('joueur.show', $joueur->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
