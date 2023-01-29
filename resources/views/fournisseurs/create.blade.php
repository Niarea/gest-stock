@extends('layouts.app')
  
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 margin-tb">
                <div class="card mb-3">
                    <div class="card-header  mb-3">
                        <h2>Ajouter un nouveau client <a class="btn btn-outline-primary py-2 px-4 float-end" href="{{ route('fournisseurs.index') }}"> Retour</a></h2>
                    </div>
                    <div class="card-body">
                    @if (session()->has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form class="row g-3 form" action="{{ route('fournisseurs.store') }}" method="POST">
                            @csrf
                            
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="nom_fournisseur">Nom du fournisseur</label>
                                    <input type="text" name="nom_fournisseur" class="form-control @error('nom_fournisseur') is-invalid @enderror" value="{{ old('nom_fournisseur') }}" placeholder="Saisir nom du fournisseur">
                                    @error('nom_fournisseur')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="tel_fournisseur">Numéro téléphone du fournisseur</label>
                                    <input type="tel" name="tel_fournisseur" class="form-control @error('tel_fournisseur') is-invalid @enderror" value="{{ old('tel_fournisseur') }}" placeholder="Saisir numéro de téléphone du fournisseur">
                                    @error('tel_fournisseur')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="adresse">Adresse fournisseur</label>
                                    <input type="text" class="form-control @error('adresse') is-invalid @enderror" name="adresse" value="{{ old('adresse') }}" placeholder="Saisir adresse fournisseur">
                                    @error('adresse')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>  

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="localite">Adresse fournisseur</label>
                                    <input type="text" class="form-control @error('localite') is-invalid @enderror" name="localite" value="{{ old('localite') }}" placeholder="Saisir localité fournisseur">
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