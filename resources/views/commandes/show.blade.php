@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2> Afficher la commande</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-outline-primary py-2 px-4" href="{{ route('commandes.index') }}"> Retour</a>
                <a class="btn btn-outline-success py-2 px-4" href="#"> Imprimer réçu</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Numéro commande</strong>
                {{ $commande->num_commande }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Numéro client</strong>
                {{ $commande->num_client }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date commande</strong>
                {{ $commande->date_commande }}
            </div>
        </div>
    </div>
@endsection