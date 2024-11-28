<!DOCTYPE html>  
<html lang="fr">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Liste des Emploie</title>  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">  
</head>  
<body>  
    <div class="container mt-5">  
        <h1>E. Emploie</h1>  
        <table class="table table-bordered">  
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
                @foreach($emploie as $emploi)  
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
                    <td>{{ $emploie->sum('emp_nat_hom') }}</td>  
                    <td>{{ $emploie->sum('emp_nat_fem') }}</td>  
                    <td>{{ $emploie->sum('emp_nat_hom') + $emploie->sum('emp_nat_fem') }}</td>  
                    <td>{{ $emploie->sum('emp_otrnat_hom') }}</td>  
                    <td>{{ $emploie->sum('emp_otrnat_fem') }}</td>  
                    <td>{{ $emploie->sum('emp_otrnat_hom') + $emploie->sum('emp_otrnat_fem') }}</td>  
                </tr>  
            </tbody>  
        </table>  
    </div>  
</body>  
</html>