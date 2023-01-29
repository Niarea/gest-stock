@extends('layouts.app')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Modifier le produit</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-outline-primary" href="{{ route('achats.index') }}"> Retour</a>
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
  
    <form action="{{ route('achats.update',$achat->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Nom client</strong>
                <input type="text" name="nom_client" value="{{ $achat->nom_client }}" class="form-control" placeholder="Saisir nom client">
            </div>
        </div>
        </div>

        <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Nom de l'article</strong>
                <input type="text" name="nom_article" value="{{ $achat->nom_article }}" class="form-control" placeholder="Saisir nom client">
            </div>
        </div>
        </div>

        <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Nombre article</strong>
                <input type="text" name="nombre_article" value="{{ $achat->nombre_article }}" class="form-control" placeholder="Saisir nombre de l'article">
            </div>
        </div>
        </div>

        <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Coût de total l'achat</strong>
                <input type="text" name="montant_achat" value="{{ $achat->montant_achat }}" class="form-control" placeholder="Saisir montant total de l'achat">
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center pt-4">
              <button type="submit" class="btn btn-primary">Soumettre</button>
            </div>
        </div>
   
    </form>
@endsection