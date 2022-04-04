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
        'Italie',
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
        <h1 class='my-5'>Equipes</h1>
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
                    <th scope='col'>Action</th> {{-- all_tr_anchor --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($equipes as $equipe)
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
                        <?php
                            $number_max = 0;
                            foreach ($joueurs as $joueur) {
                                if ($joueur->equipe->nom == $equipe->nom ) {
                                    $number_max += 1;
                                }
                            }
                        ?>
						<td>{{ $number_max }} / {{ $equipe->max_joueurs }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                <form action='{{ route('equipe.destroy', $equipe->id) }}' method='post'>
                                    @csrf
                                    @method('delete')
                                    <button class='btn btn-danger mx-1' type=submit>Delete</button>
                                </form>
                                <a class='btn btn-primary mx-1' href='{{ route('equipe.edit', $equipe->id) }}' role='button'>Edit</a>
                                <a class='btn btn-primary mx-1' href='{{ route('equipe.show', $equipe->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
