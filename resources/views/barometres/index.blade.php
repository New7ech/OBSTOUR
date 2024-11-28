@extends('layouts.app')  

@section('contenus')  
    <div class="container">  
        <div class="page-inner">  
            <div class="row justify-content-center mt-3">  
                <div class="col-md-12">  
                    <div class="card">  
                        <div class="card-header">  
                            <div class="float-start">  
                                <h4><strong>Information sur le volume du barometre</strong></h4>  
                            </div>  
                            <div class="float-end">  
                                {{-- <a href="{{ route('barometres.index') }}" class="btn btn-danger">  
                                    <i class="fas fa-angle-double-left"></i> Statistiques  
                                </a>  
                                <a href="{{ route('barometres.create') }}" class="btn btn-primary">  
                                    <i class="fas fa-angle-double-right"></i> Créer un baromètre  
                                </a> --}}  
                            </div>  
                        </div>  
                        <div class="card-body">  
                            <form method="GET" action="{{ route('barometres.index') }}">  
                                <div class="row mb-3">  
                                    <div class="col-md-4">  
                                        <label for="annee" class="form-label">Année</label>  
                                        <select name="annee" id="annee" class="form-select">  
                                            <option value="">Choisissez une année</option>  
                                            @for ($i = 2030; $i >= 2010; $i--)  
                                                <option value="{{ $i }}" {{ request('annee') == $i ? 'selected' : '' }}>{{ $i }}</option>  
                                            @endfor  
                                        </select>  
                                    </div>  
                                    <div class="col-md-4">  
                                        <label for="compagnie" class="form-label">Compagnie</label>  
                                        <select name="compagnie_id" id="compagnie" class="form-select">  
                                            <option value="">Choisissez une compagnie</option>  
                                            @foreach ($compagnies as $compagnie)  
                                                <option value="{{ $compagnie->id }}" {{ request('compagnie_id') == $compagnie->id ? 'selected' : '' }}>  
                                                    {{ $compagnie->denomination }}  
                                                </option>  
                                            @endforeach  
                                        </select>  
                                    </div>  
                                    <div class="col-md-4 align-self-end">  
                                        <button type="submit" class="btn btn-primary btn-sm">Filtrer</button>  
                                    </div>  
                                </div>  
                            </form>  
                            <div class="card">  
                                <div class="card-body">  
                                    <table class="table table-hover">  
                                        <thead>  
                                            <tr>  
                                                <th scope="col">#</th>  
                                                <th scope="col">Trimestre</th>  
                                                <th scope="col">Date</th>  
                                                <th scope="col">Compagnie</th>  
                                                <th scope="col">Action</th>  
                                            </tr>  
                                        </thead>  
                                        <tbody>  
                                            @forelse ($barometres as $barometre)  
                                            <tr>  
                                                <th scope="row">{{ $loop->iteration }}</th>  
                                                <td>{{ $barometre->trimestre }}</td>  
                                                <td>  
                                                    {{-- Affichage de la date d'enregistrement --}}  
                                                    {{ \Carbon\Carbon::parse($barometre->created_at)->format('d/m/Y') }}  
                                                </td>  
                                                <td>{{ $barometre->compagnie->denomination }}</td>  
                                                <td>  
                                                    <form action="{{ route('barometres.destroy', $barometre->id) }}" method="post">  
                                                        @csrf  
                                                        @method('DELETE')  
                                                        <a href="{{ route('barometres.show', $barometre->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-eye"></i> Voir</a>  
                                                        <a href="{{ route('barometres.edit', $barometre->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Éditer</a>  
                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Voulez-vous supprimer le volume du baromètre?');"><i class="fas fa-trash-alt"></i> Supprimer</button>  
                                                    </form>  
                                                </td>  
                                            </tr>  
                                            @empty  
                                                <tr>  
                                                    <td colspan="5">  
                                                        <span class="text-danger">  
                                                            <strong>Le volume du baromètre n'existe pas!</strong>  
                                                        </span>  
                                                    </td>  
                                                </tr>  
                                            @endforelse  
                                        </tbody>  
                                    </table>  
                                    {{-- {{ $barometres->links() }} --}}  
                                </div>  
                            </div>  
                        </div>  
                    </div>  
                </div>  
            </div>  
        </div>  
    </div>  
@endsection