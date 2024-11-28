@extends('layouts.app')
@section('contenus')
    <div class="container">
        <div class="page-inner">
            <div class="row justify-content-center mt-3">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="float-start">
                                <h4><strong>Information sur les enregistrements</strong></h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card">
                                <div class="card-body">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Circuits inter-Etats</th>
                                                <th scope="col">Circuits internes</th>
                                                <th scope="col">Excursions</th>
                                                <th scope="col">Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($activite as $activite)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $activite->nb_circuits_etat_m1 }}</td>
                                                <td>{{ $activite->nb_circuits_etat_m2 }}</td>
                                                <td>{{ $activite->nb_circuits_etat_m3 }}</td>
                                                <td>{{ $activite->nb_touriste_inter_m1 }}</td>
                                                <td>{{ $activite->nb_touriste_inter_m2 }}</td>
                                                <td>{{ $activite->nb_touriste_inter_m3 }}</td>
                                                <td>{{ $activite->nb_excursion_excu_m1 }}</td>
                                                <td>{{ $activite->nb_excursion_excu_m2 }}</td>
                                                <td>{{ $activite->nb_excursion_excu_m3 }}</td>
                                                <td>
                                                    {{ \Carbon\Carbon::parse($activite->created_at)->format('d/m/Y') }}
                                                </td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="5">
                                                    <span class="text-danger">
                                                        <strong>Le volume du baromètre n existe pas!</strong>
                                                    </span>
                                                </td>
                                            </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                    {{-- {{ $activite->links() }} --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

