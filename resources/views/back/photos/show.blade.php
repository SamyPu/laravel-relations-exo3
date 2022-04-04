@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Photo</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
					<th scope='col'>Photo Joueur</th>
                    <th scope='col'>Action</th> {{-- show_tr_anchor --}}
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope='row'>{{ $photo->id }}</td>
					<td><img src="{{ $photo->photo_joueur }}" alt=""></td>
                    <td> {{-- show_td_anchor --}}
                        <a class='btn btn-primary' href='{{ route('photo.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
