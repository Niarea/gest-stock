@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2> Afficher info achat <a class="btn btn-outline-primary float-end" href="{{ route('achats.index') }}">Retour</a></h2>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom client</strong>
                {{ $achat->nom_client }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom article</strong>
                {{ $achat->nom_article }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Coût de l'achat</strong>
                {{ $achat->montant_achat }}
            </div>
        </div>
    </div>
@endsection