@extends('layouts.app')  

@section('contenus')  
<div class="container">  
    <h1>Trimestres par Compagnie</h1>  
    <table class="table">  
        <thead>  
            <tr>  
                <th>Compagnie ID</th>  
                <th>Trimestre</th>  
                <th>Total Enregistrements</th>  
            </tr>  
        </thead>  
        <tbody>  
            @foreach($trimestres as $trimestre)  
            <tr>  
                <td>{{ $trimestre->compagnie_id }}</td>  
                <td>{{ $trimestre->trimestre }}</td>  
                <td>{{ $trimestre->total }}</td>  
            </tr>  
            @endforeach  
        </tbody>  
    </table>  
</div>  
@endsection