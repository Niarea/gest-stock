@extends('layouts.app')
@section('content')
<div class="container border border-primary">
        <div class="row justify-content-center">
            <div class="col-lg-12 margin-tb">
                <div class="card-header mb-3 border-primary">
                        <h2>Afficher article  <a class="btn btn-outline-primary float-end" href="{{ route('articles.index') }}">Retour</a></h2>
                    </div>
                </div>
            </div>
        
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Numéro:</strong>
                        {{ $article->num_article }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Libellé:</strong>
                        {{ $article->libelle }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Prix:</strong>
                        {{ $article->prix }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Quantité en stock:</strong>
                        {{ $article->quantite_stock }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Description:</strong>
                        {{ $article->description }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection