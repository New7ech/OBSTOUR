@extends('layouts.app')  

@section('contenus')  
<div class="container">  
    <h1>Formulaire du Baromètre trimestriel de l'année {{ \Carbon\Carbon::now()->year }}</h1>  
    <table class="table">  
        <thead>  
            <tr>  
                <th>Trimestre</th>  
                <th>Dates</th>  
                <th>Action</th>  
            </tr>  
        </thead>  
        <tbody>  
            @php  
                // Obtenir le trimestre actuel  
                $currentQuarter = \Carbon\Carbon::now()->quarter;  
            @endphp   
            @foreach ($trimesters as $key => $value)  
            <tr>  
                <td>{{ $key }}</td>  
                <td>{{ $value }}</td>  
                <td>  
                    @if(isset($disabledTrimesters[$key]) && $disabledTrimesters[$key])  
                        <span class="text-danger">Déjà créé</span>  
                    @elseif (intval(substr($key, 0, 1)) > $currentQuarter)   
                        <span class="text-danger">Trimestre Futur</span>   
                    @else  
                        <form action="{{ route('formulairebarometre.store') }}" method="POST">  
                            @csrf  
                            <input type="hidden" name="trimestre" value="{{ $key }}">  
                            <input type="hidden" name="compagnie_id" value="{{ Auth::user()->compagnie_id }}">  
                            <input type="hidden" name="users_id" value="{{ Auth::id() }}">  
                            <button type="submit" class="btn btn-primary">Créer</button>  
                        </form>  
                    @endif  
                </td>  
            </tr>  
            @endforeach  
        </tbody>  
    </table>  
</div>  
@endsection