@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 margin-tb">
                <div class="card mb-3">
                    <div class="card-header  mb-3">
                        <h2>Ajouter nouveau client <a class="btn btn-outline-success py-2 px-4 float-end" href="{{ route('clients.index') }}"> Retour</a></h2>
                    </div>
                    <div class="card-body">
                    @if (session()->has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form class="row g-3 form" action="{{ route('clients.store') }}" method="POST">
                            @csrf

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="nom_client">Nom client</label>
                                    <input type="text" name="nom_client" class="form-control @error('nom_client') is-invalid @enderror" value="{{ old('nom_client') }}" placeholder="Saisir nom client">
                                    @error('nom_client')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="tel_client">Numéro de téléphone</label>
                                    <input type="text" name="tel_client" class="form-control @error('tel_client') is-invalid @enderror" value="{{ old('tel_client') }}" placeholder="Saisir numéro de téléphone client">
                                    @error('tel_client')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="adresse">Adresse client</label>
                                    <input type="text" name="adresse" class="form-control @error('adresse') is-invalid @enderror" value="{{ old('adresse') }}" placeholder="Saisir adresse client">
                                    @error('adresse')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="localite">Localité client</label>
                                    <input type="text" name="localite" class="form-control @error('localite') is-invalid @enderror" value="{{ old('localite') }}" placeholder="Saisir localité du client">
                                    @error('localite')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">Soumettre</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
