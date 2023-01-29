@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12 margin-tb">
            <div class="card mb-3 border border-primary">
                <div class="card-header  mb-3">
                    <h2>Modifier infos client <a class="btn btn-outline-success py-2 px-4 float-end" href="{{ route('clients.index') }}"> Retour</a></h2>
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
                    
                    <form class="row g-3 form" action="{{ route('clients.update', $client->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Nom client</strong>
                                <input type="text" name="nom_client" value="{{ $client->nom_client }}"class="form-control" placeholder="Saisir un nom">
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Numéro téléphone client</strong>
                                <input type="tel" name="tel_client" value="{{ $client->tel_client }}" class="form-control" placeholder="Saisir un numéro de téléphone">
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Adresse client</strong>
                                <input type="text" name="adresse" value="{{ $client->adresse }}" class="form-control" placeholder="Saisir une adresse">
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Localité client</strong>
                                <input type="text" name="localite" value="{{ $client->localite }}" class="form-control" placeholder="Saisir une localité">
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