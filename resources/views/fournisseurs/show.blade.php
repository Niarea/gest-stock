@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2> Afficher fournisseur <a class="btn btn-outline-primary float-end" href="{{ route('fournisseurs.index') }}">Retour</a></h2>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom fournisseur</strong>
                {{ $fournisseur->nom_fournisseur }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Téléphone fournisseur</strong>
                {{ $fournisseur->tel_fournisseur }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Adresse fournisseur</strong>
                {{ $fournisseur->adresse }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Localité fournisseur</strong>
                {{ $fournisseur->localite }}
            </div>
        </div>
    </div>
@endsection