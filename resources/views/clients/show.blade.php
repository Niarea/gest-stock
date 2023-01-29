@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12 margin-tb">
            <div class="card mb-3 border border-primary">
                <div class="card-header  mb-3 ">
                    <h2>Voir les infos client <a class="btn btn-outline-success py-2 px-4 float-end" href="{{ route('clients.index') }}"> Retour</a></h2>
                </div class="border border-primary">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nom client: </strong>
                            {{ $client->nom_client }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nom: </strong>
                            {{ $client->tel_client }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Adresse: </strong>
                            {{ $client->adresse }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Localité: </strong>
                            {{ $client->localite }}
                        </div>
                    </div>
            </div>
        </div>                
    </div>               
</div>
@endsection