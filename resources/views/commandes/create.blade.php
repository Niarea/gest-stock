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
                            @livewire('commandes')

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
