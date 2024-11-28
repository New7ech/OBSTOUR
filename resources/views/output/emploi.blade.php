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
                                    <table class="table table-bordered table-bordered-bd-warning mt-4">  
                                        <thead>  
                                            <tr>  
                                                <th>Catégorie socio-professionnelle</th>  
                                                <th colspan="3">Nationaux</th>  
                                                <th colspan="3">Autres nationalités</th>  
                                            </tr>  
                                            <tr>  
                                                <th></th>  
                                                <th>Homme</th>  
                                                <th>Femme</th>  
                                                <th>Ensemble</th>  
                                                <th>Homme</th>  
                                                <th>Femme</th>  
                                                <th>Ensemble</th>  
                                            </tr>  
                                        </thead>  
                                        <tbody>  
                                            @foreach($emploi as $emploi)  
                                                <tr>  
                                                    <td>Cadre supérieur, Ingénieur et assimilé</td>  
                                                    <td>{{ $emploi->cadrsup_nat_hom }}</td>  
                                                    <td>{{ $emploi->cadrsup_nat_fem }}</td>  
                                                    <td>{{ $emploi->cadrsup_nat_hom + $emploi->cadrsup_nat_fem }}</td>  
                                                    <td>{{ $emploi->cadrsup_otrnat_hom }}</td>  
                                                    <td>{{ $emploi->cadrsup_otrnat_fem }}</td>  
                                                    <td>{{ $emploi->cadrsup_otrnat_hom + $emploi->cadrsup_otrnat_fem }}</td>  
                                                </tr>  
                                                <tr>  
                                                    <td>Cadre moyen, Agent de maîtrise</td>  
                                                    <td>{{ $emploi->cadrmoy_nat_hom }}</td>  
                                                    <td>{{ $emploi->cadrmoy_nat_fem }}</td>  
                                                    <td>{{ $emploi->cadrmoy_nat_hom + $emploi->cadrmoy_nat_fem }}</td>  
                                                    <td>{{ $emploi->cadrmoy_otrnat_hom }}</td>  
                                                    <td>{{ $emploi->cadrmoy_otrnat_fem }}</td>  
                                                    <td>{{ $emploi->cadrmoy_otrnat_hom + $emploi->cadrmoy_otrnat_fem }}</td>  
                                                </tr>  
                                                <tr>  
                                                    <td>Employés/ouvriers</td>  
                                                    <td>{{ $emploi->emp_nat_hom }}</td>  
                                                    <td>{{ $emploi->emp_nat_fem }}</td>  
                                                    <td>{{ $emploi->emp_nat_hom + $emploi->emp_nat_fem }}</td>  
                                                    <td>{{ $emploi->emp_otrnat_hom }}</td>  
                                                    <td>{{ $emploi->emp_otrnat_fem }}</td>  
                                                    <td>{{ $emploi->emp_otrnat_hom + $emploi->emp_otrnat_fem }}</td>  
                                                </tr>  
                                                <tr>  
                                                    <td>Manœuvre</td>  
                                                    <td>{{ $emploi->man_nat_hom }}</td>  
                                                    <td>{{ $emploi->man_nat_fem }}</td>  
                                                    <td>{{ $emploi->man_nat_hom + $emploi->man_nat_fem }}</td>  
                                                    <td>{{ $emploi->man_otrnat_hom }}</td>  
                                                    <td>{{ $emploi->man_otrnat_fem }}</td>  
                                                    <td>{{ $emploi->man_otrnat_hom + $emploi->man_otrnat_fem }}</td>  
                                                </tr>  
                                                <tr>  
                                                    <td>Temporaires/saisonniers</td>  
                                                    <td>{{ $emploi->tem_nat_hom }}</td>  
                                                    <td>{{ $emploi->tem_nat_fem }}</td>  
                                                    <td>{{ $emploi->tem_nat_hom + $emploi->tem_nat_fem }}</td>  
                                                    <td>{{ $emploi->tem_otrnat_hom }}</td>  
                                                    <td>{{ $emploi->tem_otrnat_fem }}</td>  
                                                    <td>{{ $emploi->tem_otrnat_hom + $emploi->tem_otrnat_fem }}</td>  
                                                </tr>  
                                            @endforeach  
                                            <tr>  
                                                <td><strong>Ensemble</strong></td>  
                                                <td>{{ $emploi->cadrsup_nat_hom + $emploi->cadrmoy_nat_hom + $emploi->emp_nat_hom + $emploi->man_nat_hom +$emploi->tem_nat_hom }}</td>  
                                                <td>{{ $emploi->cadrsup_nat_fem + $emploi->cadrmoy_nat_fem + $emploi->emp_nat_fem + $emploi->man_nat_fem +$emploi->tem_nat_fem }}</td>  
                                                <td>{{ $emploi->cadrsup_nat_hom + $emploi->cadrmoy_nat_hom + $emploi->emp_nat_hom + $emploi->man_nat_hom +$emploi->tem_nat_hom
                                                        + $emploi->cadrsup_nat_fem + $emploi->cadrmoy_nat_fem + $emploi->emp_nat_fem + $emploi->man_nat_fem +$emploi->tem_nat_fem }}</td>  
                                                <td>{{ $emploi->cadrsup_otrnat_hom + $emploi->cadrmoy_otrnat_hom + $emploi->emp_otrnat_hom + $emploi->man_otrnat_hom +$emploi->tem_otrnat_hom }}</td>  
                                                <td>{{ $emploi->cadrsup_otrnat_fem + $emploi->cadrmoy_otrnat_fem + $emploi->emp_otrnat_fem + $emploi->man_otrnat_fem +$emploi->tem_otrnat_fem }}</td>  
                                                  
                                                <td>{{ $emploi->cadrsup_otrnat_hom + $emploi->cadrmoy_otrnat_hom + $emploi->emp_otrnat_hom + $emploi->man_otrnat_hom +$emploi->tem_otrnat_hom
                                                        + $emploi->cadrsup_otrnat_fem + $emploi->cadrmoy_otrnat_fem + $emploi->emp_otrnat_fem + $emploi->man_otrnat_fem +$emploi->tem_otrnat_fem }}</td>  
                                            </tr>  
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
