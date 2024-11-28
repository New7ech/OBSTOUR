{{-- les formulaire pour lister les trimestre --}}
@extends('layouts.app')  
@section('contenus')  
<div class="container">  
    <h1>Formulaire du Canevas du rapport trimestriel de l'Année {{ \Carbon\Carbon::now()->year }}</h1>  
    
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
                $trimesters = [  
                    '1er trimestre' => 'du 1er janvier au 31 mars',  
                    '2ème trimestre' => 'du 1er avril au 30 juin',  
                    '3ème trimestre' => 'du 1er juillet au 30 septembre',  
                    '4ème trimestre' => 'du 1er octobre au 31 décembre',  
                ];  
                $currentQuarter = \Carbon\Carbon::now()->quarter;  
                $routes = [  
                    '1er trimestre' => 'formulaire.storeFirstQuarter',  
                    '2ème trimestre' => 'formulaire.storeSecondQuarter',  
                    '3ème trimestre' => 'formulaire.storeThirdQuarter',  
                    '4ème trimestre' => 'formulaire.storeFourthQuarter',  
                ];  
            @endphp  
            
            @foreach ($trimesters as $key => $value)  
            <tr>  
                <td>{{ $key }}</td>  
                <td>{{ $value }}</td>  
                <td>  
                    @if(isset($disabledTrimesters[$key]) && $disabledTrimesters[$key])  
                        <span class="text-danger">Déjà créé</span>  
                    @elseif (intval(substr($key, 0, 1)) > $currentQuarter)   
                        <span class="text-danger">Trimestre futur</span>    
                    @else  
                        <form action="{{ route($routes[$key]) }}" method="POST">  
                            @csrf  
                            <input type="hidden" name="trimestre" value="{{ $key }}">  
                            
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