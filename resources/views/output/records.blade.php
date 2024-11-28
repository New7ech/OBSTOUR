@extends('layouts.app')

@section('contents')
    <div class="container mt-4">
        <div class="page-inner">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4><strong>Enregistrements de Utilisateur</strong></h4>
                        </div>
                        <div class="card-body">
                            @if ($cacircuits->isEmpty())
                                <p class="text-danger text-center">Aucun enregistrement trouvé pour cet utilisateur.</p>
                            @else
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Circuit Inter-états</th>
                                            <th scope="col">Circuit Internes</th>
                                            <th scope="col">Excursions</th>
                                            <th scope="col">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cacircuits as $index => $cacircuit)
                                            <tr>
                                                <th scope="row">{{ $index + 1 }}</th>
                                                <td>{{ $cacircuit->cur_etat_m1 }}</td>
                                                <td>{{ $cacircuit->cur_int_m1 }}</td>
                                                <td>{{ $cacircuit->cur_excu_m1 }}</td>
                                                <td>{{ ($cacircuit->cur_etat_m1 + $cacircuit->cur_int_m1 + $cacircuit->cur_excu_m1) }}</td>
                                            </tr>
                                            <tr>
                                                <td colspan="5"><strong>Mois 2:</strong></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">{{ $index + 1 }}</th>
                                                <td>{{ $cacircuit->cur_etat_m2 }}</td>
                                                <td>{{ $cacircuit->cur_int_m2 }}</td>
                                                <td>{{ $cacircuit->cur_excu_m2 }}</td>
                                                <td>{{ ($cacircuit->cur_etat_m2 + $cacircuit->cur_int_m2 + $cacircuit->cur_excu_m2) }}</td>
                                            </tr>
                                            <tr>
                                                <td colspan="5"><strong>Mois 3:</strong></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">{{ $index + 1 }}</th>
                                                <td>{{ $cacircuit->cur_etat_m3 }}</td>
                                                <td>{{ $cacircuit->cur_int_m3 }}</td>
                                                <td>{{ $cacircuit->cur_excu_m3 }}</td>
                                                <td>{{ ($cacircuit->cur_etat_m3 + $cacircuit->cur_int_m3 + $cacircuit->cur_excu_m3) }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
