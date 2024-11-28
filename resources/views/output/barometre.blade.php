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
                                    <h4><strong>Information sur les enregistrements du barometre</strong></h4>
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col" colspan="2">Billetterie</th>
                                                <th scope="col" colspan="2">Circuits</th>
                                                <th scope="col">Activités</th>
                                                <th scope="col" colspan="2">PREVISIONS</th>
                                                <th scope="col" colspan="2">OPINIONS</th>
                                                <th scope="col">Date</th>
                                            </tr>

                                        </thead>
                                        <tbody>
                                            @forelse ($barometre as $barometre)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $barometre->billetterie_nombre }}</td>
                                                <td>{{ $barometre->billetterie_ca }}</td>
                                                <td>{{ $barometre->circuit_nombre }}</td>
                                                <td>{{ $barometre->circuit_ca }}</td>
                                                <td>{{ $barometre->activites_connexes_ca }}</td>
                                                <td>{{ $barometre->prevision_ca_global }}</td>
                                                <td>{{ $barometre->prevision_emplois }}</td>
                                                <td>{{ $barometre->sondage_climat_affaires }}</td>
                                                <td>{{ $barometre->sondage_nombre_billets }}</td>
                                                <td>
                                                    {{ \Carbon\Carbon::parse($barometre->created_at)->format('d/m/Y') }}
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
                                    {{-- {{ $barometre->links() }} --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

