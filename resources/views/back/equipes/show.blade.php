@php
    $countries = [
        'Austria',
        'Belgique',
        'Bulgaria',
        'Cyprus',
        'Czech Republic',
        'Germany',
        'Denmark',
        'Estonia',
        'Spain',
        'Finland',
        'France',
        'United Kingdom',
        'Greece',
        'Hungary',
        'Croatia',
        'Ireland, Republic of (EIRE)',
        'Italy',
        'Lithuania',
        'Luxembourg',
        'Latvia',
        'Malta',
        'Netherlands',
        'Poland',
        'Portugal',
        'Romania',
        'Sweden',
        'Slovenia',
        'Slovakia',
    ];
@endphp

@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Equipe</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
					<th scope='col'>Nom</th>
					<th scope='col'>Ville</th>
					<th scope='col'>Continent</th>
					<th scope='col'>Avant</th>
					<th scope='col'>Central</th>
					<th scope='col'>Arrière</th>
					<th scope='col'>Remplaçant</th>
					<th scope='col'>Max</th>
                    <th scope='col'>Action</th> {{-- show_tr_anchor --}}
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope='row'>{{ $equipe->id }}</td>
					<td>{{ $equipe->nom }}</td>
					<td>{{ $equipe->ville }}</td>

                    @if (in_array($equipe->pays,$countries))
                        <td>Europe</td>
                    @else
                        <td>Hors Europe</td>
                    @endif   

                    @foreach ($roles as $role)
                        @php
                            $number = 0;
                            foreach ( $equipe->joueur as $joueur ) {
                                if ( $joueur->role->nom == $role->nom) {
                                   $number += 1;
                                }
                            }
                        @endphp
					    <td>{{ $number }} / {{ $role->maximum }}</td>   
                    @endforeach
                    {{-- MAX --}}
					@php
                        $number_max = 0;
                        foreach ($joueurs as $joueur) {
                            if ($joueur->equipe->nom == $equipe->nom ) {
                                $number_max += 1;
                            }
                        }
                    @endphp
					<td>{{ $number_max }} / {{ $equipe->max_joueurs }}</td>
                    <td> {{-- show_td_anchor --}}
                        <a class='btn btn-primary' href='{{ route('equipe.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
        <h1 class='my-5'>Joueurs</h1>
        <table class='table table-striped'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
					<th scope='col'>Nom</th>
					<th scope='col'>Prénom</th>
					<th scope='col'>Rôle</th>

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
                @foreach ($equipe->joueur as $joueur)
                    <tr>
                        <td scope='row'>{{ $joueur->id }}</td>
						<td>{{ $joueur->nom }}</td>
						<td>{{ $joueur->prenom }}</td>
						<td>{{ $joueur->role->nom }}</a></td>


						{{-- <td>{{ $joueur->age }}</td>
						<td>{{ $joueur->telephone }}</td>
						<td>{{ $joueur->email }}</td>
						<td>{{ $joueur->genre }}</td>
						<td>{{ $joueur->pays }}</td>
						<td>{{ $joueur->role->nom }}</td> --}}
						{{-- <td><img src="{{ $joueur->photo->photo_joueur }}" alt=""></td> --}}

                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                {{-- <form action='{{ route('joueur.destroy', $joueur->id) }}' method='post'>
                                    @csrf
                                    @method('delete')
                                    <button class='btn btn-danger mx-1' type=submit>Delete</button>
                                </form>
                                <a class='btn btn-primary mx-1' href='{{ route('joueur.edit', $joueur->id) }}' role='button'>Edit</a> --}}
                                <a class='btn btn-primary mx-1' href='{{ route('joueur.show', $joueur->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
