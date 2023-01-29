@extends('layouts.app')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Modifier le produit</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-outline-primary" href="{{ route('commandes.index') }}"> Retour</a>
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
  
    <form action="{{ route('commandes.update',$commande->num_commande) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Numéro commande</strong>
                <input type="text" name="num_commande" value="{{ $commande->num_commande }}"class="form-control" placeholder="Saisir numéro commande">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Numéro client</strong>
                <input type="text" name="num_client" value="{{ $commande->num_client }}" class="form-control" placeholder="Saisir numéro client">
            </div>
        </div>
        </div>
        <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Date commande</strong>
                <input type="text" name="date_commande" value="{{ $commande->date_commande }}" class="form-control" placeholder="Saisir date de la commande">
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center pt-4">
              <button type="submit" class="btn btn-primary">Soumettre</button>
            </div>
        </div>
   
    </form>
@endsection