@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Photos</h1>
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
					<th scope='col'>Photo Joueurs</th>
                    <th scope='col'>Action</th> {{-- all_tr_anchor --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($photos as $photo)
                    <tr>
                        <th scope='row'>{{ $photo->id }}</th>
						<td><img src="{{ $photo->photo_joueur }}" alt=""></td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                <form action='{{ route('photo.destroy', $photo->id) }}' method='post'>
                                    @csrf
                                    @method('delete')
                                    <button class='btn btn-danger mx-1' type=submit>Delete</button>
                                </form>
                                <a class='btn btn-primary mx-1' href='{{ route('photo.edit', $photo->id) }}' role='button'>Edit</a>
                                <a class='btn btn-primary mx-1' href='{{ route('photo.show', $photo->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
