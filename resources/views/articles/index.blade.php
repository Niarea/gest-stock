@extends('layouts.app')
 
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 col-xs-6 col-sm-6 margin-tb">
                <div class="card mb-3 border border-primary">
                    <div class="card-header mb-3 border-primary">
                        <h2>Liste des articles  <a class="btn btn-outline-success float-end" href="{{ route('articles.create') }}"> Ajouter un nouvel article</a></h2>
                    </div>

                    @if ($message = Session::get('success'))
                    
                        <div class="alert alert-success hr d-flex align-items-center" role="alert">
                            <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16" role="img" aria-label="Success:">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg> {{ $message }}</div>
                        </div>
                    @endif
    
                    <table class="table table-bordered ">
                        <tr class="bg-dark text-white">
                            <th>Numéro</th>
                            <th>Libellé</th>
                            <th>Prix</th>
                            <th>Quantité</th>
                            <th>Description</th>
                            <th width="290px">Action</th>
                        </tr>
                        @foreach ($articles as $article)
                            <tr>
                                <td>{{ $article->num_article }}</td>
                                <td>{{ $article->libelle }}</td>
                                <td>{{ $article->prix }}</td>
                                <td>{{ $article->quantite_stock }}</td>
                                <td>{{ $article->description }}</td>
                                <td>
                                    <form action="{{ route('articles.destroy', $article->num_article) }}" method="POST">
                                        <a class="btn btn-outline-primary" href="{{ route('articles.show', $article->num_article) }}">Montrer</a>
                                        <a class="btn btn-outline-success" href="{{ route('articles.edit', $article->num_article) }}">Éditer</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Êtes-vous sûr ?');" class="btn btn-outline-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg>Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    <div class="d-flex justify-content-center pagination-lg">
                    {!! $articles->links('pagination::bootstrap-4') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 