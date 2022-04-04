@extends('back.layouts.app')
@section('content')
    <section id='multiple-column-form'>
        <div class='page-heading'>
            <h3>Joueur Create</h3>
        </div>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul class='mb-0'>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class='row match-height'>
            <div class='col-12'>
                <div class='card'>
                    <div class='card-content'>
                        <div class='card-body'>
                            <form class='form' action='{{ route('joueur.store') }}' method='post'>
                                @csrf
                                <div class='row'>
									<div class='col-md-6 col-12'>
										<div class='form-group'>
											<label for='first-nom-column'>Nom</label>
											<input type='text' id='first-nom-column' class='form-control' name='nom'>
										</div>
									</div>
									<div class='col-md-6 col-12'>
										<div class='form-group'>
											<label for='first-prenom-column'>Prénom</label>
											<input type='text' id='first-prenom-column' class='form-control' name='prenom'>
										</div>
									</div>
									<div class='col-md-6 col-12'>
										<div class='form-group'>
											<label for='first-age-column'>Age</label>
											<input type='text' id='first-age-column' class='form-control' name='age'>
										</div>
									</div>
									<div class='col-md-6 col-12'>
										<div class='form-group'>
											<label for='first-telephone-column'>Téléphone</label>
											<input type='text' id='first-telephone-column' class='form-control' name='telephone'>
										</div>
									</div>
									<div class='col-md-6 col-12'>
										<div class='form-group'>
											<label for='first-email-column'>Email</label>
											<input type='text' id='first-email-column' class='form-control' name='email'>
										</div>
									</div>
									<div class='col-md-6 col-12'>
										<div class='form-group'>
											<label for='first-genre-column'>Genre</label>
											<input type='text' id='first-genre-column' class='form-control' name='genre'>
										</div>
									</div>
									<div class='col-md-6 col-12'>
										<div class='form-group'>
											<label for='first-pays-column'>Pays</label>
											<input type='text' id='first-pays-column' class='form-control' name='pays'>
										</div>
									</div>
									<div class='col-md-6 col-12'>
										<div class='form-group'>
											<label for='first-role-column'>Rôle</label>
											{{-- <input type='text' id='first-role-column' class='form-control' name='role'> --}}
											<select name="role" class="form-control">
												<option value="{{ null }}">-</option>
												@foreach ($roles as $role)
													<option value="{{ $role->id }}">{{ $role->nom }}</option>
												@endforeach
											</select>
										</div>
									</div>
									<div class='col-md-6 col-12'>
										<div class='form-group'>
											<label for='first-equipe-column'>Equipe</label>
											{{-- <input type='text' id='first-role-column' class='form-control' name='role'> --}}
											<select name="equipe" class="form-control">
												<option value="{{ null }}">-</option>
												@foreach ($equipes as $equipe)
													<option value="{{ $equipe->id }}">{{ $equipe->nom }}</option>
												@endforeach
											</select>
										</div>
									</div>
                                    <div class='col-12 d-flex justify-content-end'> {{-- create_blade_anchor --}}
                                       <button type='submit' class='btn btn-primary me-1 mb-1'>Submit</button>
                                        <button type='reset' class='btn btn-light-secondary me-1 mb-1'>Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
