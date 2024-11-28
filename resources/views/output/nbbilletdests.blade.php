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
                                    <h4><strong>Information sur les enregistrements</strong></h4>
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col" colspan="4">Billet agrément IATA</th>
                                                <th scope="col" colspan="4">Billets émis auprès</th>
                                                <th scope="col">Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($nbbilletdests as $nbbilletdests)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $nbbilletdests->iata_erop_m1 }}</td>
                                                <td>{{ $nbbilletdests->iata_afr_m1 }}</td>
                                                <td>{{ $nbbilletdests->iata_amrq_m1 }}</td>
                                                <td>{{ $nbbilletdests->iata_asi_m1 }}</td>
                                                <td>{{ $nbbilletdests->autr_erop_m1 }}</td>
                                                <td>{{ $nbbilletdests->autr_afr_m1 }}</td>
                                                <td>{{ $nbbilletdests->autr_amrq_m1 }}</td>
                                                <td>{{ $nbbilletdests->autr_asi_m1 }}</td>
                                                <td>
                                                    {{ \Carbon\Carbon::parse($nbbilletdests->created_at)->format('d/m/Y') }}
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
                                    {{-- {{ $nbbilletdests->links() }} --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
