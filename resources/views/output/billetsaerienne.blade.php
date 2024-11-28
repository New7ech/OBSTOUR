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
                                                <th scope="col">Air Burkina</th>
                                                <th scope="col">Air France</th>
                                                <th scope="col">Air Ivoire</th>
                                                <th scope="col">Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($billetsaerienne as $billetsaerienne)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $billetsaerienne->bil_bf_m1 }}</td>
                                                <td>{{ $billetsaerienne->bil_bf_m2 }}</td>
                                                <td>{{ $billetsaerienne->bil_bf_m3 }}</td>
                                                <td>{{ $billetsaerienne->bil_fr_m1 }}</td>
                                                <td>{{ $billetsaerienne->bil_fr_m2 }}</td>
                                                <td>{{ $billetsaerienne->bil_fr_m3 }}</td>
                                                <td>{{ $billetsaerienne->bil_ivr_m1 }}</td>
                                                <td>{{ $billetsaerienne->bil_ivr_m2 }}</td>
                                                <td>{{ $billetsaerienne->bil_ivr_m3 }}</td>
                                                <td>
                                                    {{ \Carbon\Carbon::parse($billetsaerienne->created_at)->format('d/m/Y') }}
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
                                    {{-- {{ $billetsaerienne->links() }} --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
