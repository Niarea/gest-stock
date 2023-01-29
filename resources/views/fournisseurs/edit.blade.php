
@extends('layouts.app')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Modifier le produit</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-outline-primary" href="{{ route('fournisseurs.index') }}"> Retour</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Oups! </strong> Il y a eu des problèmes avec votre entrée.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('fournisseurs.update',$fournisseur->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Nom fournisseur</strong>
                <input type="text" name="nom_fournisseur" value="{{ $fournisseur->nom_fournisseur }}"class="form-control" placeholder="Saisir nom fournisseur">
            </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Téléphone fournisseur</strong>
                <input type="text" name="tel_fournisseur" value="{{ $fournisseur->tel_fournisseur }}"class="form-control" placeholder="Saisir numéro téléphone fournisseur">
            </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Adresse fournisseur</strong>
                <input type="text" name="adresse" value="{{ $fournisseur->adresse }}" class="form-control" placeholder="Saisir adresse fournisseur">
            </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Localité fournisseur</strong>
                <input type="text" name="localite" value="{{ $fournisseur->localite }}" class="form-control" placeholder="Saisir localité fournisseur">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center pt-4">
            <button type="submit" class="btn btn-primary">Soumettre</button>
        </div>   
    </form>
@endsection