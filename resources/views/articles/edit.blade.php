@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12 margin-tb">
            <div class="card mb-3 border border-primary">
                <div class="card-header  mb-3">
                    <h2>Modifier infos article <a class="btn btn-outline-success py-2 px-4 float-end" href="{{ route('articles.index') }}"> Retour</a></h2>
                </div>
                <div class="card-body">
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
                    
                    <form class="row g-3 form" action="{{ route('articles.update', $article->num_article) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Numéro de l'article</strong>
                                <input type="text" name="num_article" value="{{ $article->num_article }}"class="form-control" placeholder="Saisir un numéro d'article">
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Libellé</strong>
                                <input type="text" name="libelle" value="{{ $article->libelle }}" class="form-control" placeholder="Saisir libellé">
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Prix de l'article</strong>
                                <input type="float" name="prix" value="{{ $article->prix }}" class="form-control" placeholder="Saisir une prix">
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Quantité en stock</strong>
                                <input type="int" name="quantite_stock" value="{{ $article->quantite_stock }}" class="form-control" placeholder="Saisir le nombre total de l'article">
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-12">
                            <div class="form-group">
                                <strong>Quantité en stock</strong>
                                <textarea class="form-control" style="height:100px" name="description" value="{{ $article->description }}" placeholder="Saisir la description de l'article"></textarea>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center pt-4">
                            <button type="submit" class="btn btn-primary">Soumettre</button>
                        </div>
                    </form>
            </div>    
        </div>        
    </div>      
</div>
@endsection