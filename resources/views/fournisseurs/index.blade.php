@extends('layouts.app')
 
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 margin-tb">
                <div class="card mb-3">
                    <div class="card-header  mb-3">
                        <h2>Section Fournisseur  <a class="btn btn-outline-success float-end" href="{{ route('fournisseurs.create') }}"> Ajouter un nouveau fournisseur</a></h2>
                    </div>

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
    
                    <table class="table table-bordered">
                        <tr>
                            <th>Nom fournisseur</th>
                            <th>Téléphone fournisseur</th>
                            <th>Adresse fournisseur</th>
                            <th>Localité fournisseur</th>
                            <th width="290px">Actions</th>
                        </tr>
                        @foreach ($fournisseurs as $fournisseur)
                            <tr>
                                <td>{{ $fournisseur->nom_fournisseur }}</td>
                                <td>{{ $fournisseur->tel_fournisseur }}</td>
                                <td>{{ $fournisseur->adresse }}</td>
                                <td>{{ $fournisseur->localite }}</td>
                                <td>
                                    <form action="{{ route('fournisseurs.destroy',$client->id) }}" method="POST">
                                        <a class="btn btn-outline-primary" href="{{ route('fournisseurs.show',$client->id) }}">Montrer</a>
                                        <a class="btn btn-outline-success" href="{{ route('fournisseurs.edit',$client->id) }}">Éditer</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg>Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    <div class="d-flex justify-content-center pagination-lg">
                    {!! $fournisseurs->links('pagination::bootstrap-4') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 