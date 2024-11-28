@extends('layouts.app')  

@section('contenus')  
<div class="container">  
    <h1>Statistiques des enregistrements par compagnie</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Compagnie</th>
                <th>Total des enregistrements</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($companies as $company)
                <tr>
                    <td>{{ $company->compagnie->denomination }}</td>
                    <td>{{ $company->total }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>  
@endsection
