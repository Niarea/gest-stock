@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 margin-tb">
                <div class="card mb-3">
                    <div class="card-header  mb-3">
                        <h2>Ajouter nouvelle commande <a class="btn btn-outline-primary py-2 px-4 float-end" href="{{ route('commandes.index') }}"> Retour</a></h2>
                    </div>
                    <div class="card-body">
                    @if (session()->has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form class="row g-3 form" action="{{ route('commandes.store') }}" method="POST">
                            @csrf

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="client_id">Nom du client</label>
                                    <select class="form-control @error('client_id') is-invalid @enderror" name="client_id" placeholder="Choisir le nom du client">
                                        @foreach($clients as $client)
                                        <option value="{{ ('$client->id') }}">{{$client->nom_client }}</option>
                                        @endforeach
                                    </select>
                                    @error('client_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="nom_article">Nom de l'article</label>
                                    <select class="form-control @error('libelle') is-invalid @enderror" name="nom_article" placeholder="Choisir le nom de l'article">
                                        @foreach($articles as $article)
                                        <option value="{{ old('libelle') }}">{{$article->libelle }}</option>
                                        @endforeach
                                    </select>
                                    @error('nom_article')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="nombre_article">Nombre d'article</label>
                                    <input type="int" class="form-control @error('nombre_article') is-invalid @enderror"
                                     name="nombre_article" value="{{ old('nombre_article') }}" placeholder="Saisir le nombre d'article">
                                    @error('nombre_article')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="montant">Coût total en FCFA</label>
                                    @foreach($articles as $article)
                                    <textarea class="form-control @error('montant') is-invalid @enderror" name="montant"
                                     value="{{ old('montant', $article->prix * $article->quantite_stock) }}" placeholder="Montant de la commande">
                                    </textarea>
                                    @endforeach
                                    @error('montant')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="date_commande">La date de la commande</label>
                                    <input type="date" name="date_commande" class="form-control @error('date_commande')
                                    is-invalid @enderror" value="{{ old('date_commande') }}" placeholder="Saisir la date de la commande">
                                    @error('date_commande')
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
