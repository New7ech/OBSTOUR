<!DOCTYPE html>  
<html lang="fr">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Nombre de nbbilletdest Émis</title>  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">  
</head>  
<body>  
    <div class="container mt-5">  
        <h1>Nombre de nbbilletdest Émis à Destination des Continents</h1>  
        <table class="table table-bordered">  
            <thead>  
                <tr>  
                    <th>Continents</th>  
                    <th colspan="3">nbbilletdest émis par IATA</th>  
                    <th colspan="3">nbbilletdest émis par Autres Compagnies</th>  
                    <th>Total</th>  
                </tr>  
                <tr>  
                    <th></th>  
                    <th>Mois 1</th>  
                    <th>Mois 2</th>  
                    <th>Mois 3</th>  
                    <th>Mois 1</th>  
                    <th>Mois 2</th>  
                    <th>Mois 3</th>  
                    <th></th>  
                </tr>  
            </thead>  
            <tbody>  
                @foreach($nbbilletdest as $billet)  
                    <tr>  
                        <td>Afrique</td>  
                        <td>{{ $billet->iata_afr_mois_1 }}</td>  
                        <td>{{ $billet->iata_afr_mois_2 ?? '-' }}</td>  
                        <td>{{ $billet->iata_afr_mois_3 }}</td>  
                        <td>{{ $billet->autr_afr_mois_1 }}</td>  
                        <td>{{ $billet->autr_afr_mois_2 ?? '-' }}</td>  
                        <td>{{ $billet->autr_afr_mois_3 }}</td>  
                        <td>{{ ($billet->iata_afr_mois_1 + $billet->iata_afr_mois_3) + ($billet->autr_afr_mois_1 + $billet->autr_afr_mois_3) }}</td>  
                    </tr>  
                    <tr>  
                        <td>Europe</td>  
                        <td>{{ $billet->iata_erop_mois_1 }}</td>  
                        <td>{{ $billet->iata_erop_mois_2 ?? '-' }}</td>  
                        <td>{{ $billet->iata_erop_mois_3 }}</td>  
                        <td>{{ $billet->autr_erop_mois_1 }}</td>  
                        <td>{{ $billet->autr_erop_mois_2 ?? '-' }}</td>  
                        <td>{{ $billet->autr_erop_mois_3 }}</td>  
                        <td>{{ ($billet->iata_erop_mois_1 + $billet->iata_erop_mois_3) + ($billet->autr_erop_mois_1 + $billet->autr_erop_mois_3) }}</td>  
                    </tr>  
                    <tr>  
                        <td>Amérique</td>  
                        <td>{{ $billet->iata_amrq_mois_1 }}</td>  
                        <td>{{ $billet->iata_amrq_mois_2 ?? '-' }}</td>  
                        <td>{{ $billet->iata_amrq_mois_3 }}</td>  
                        <td>{{ $billet->autr_amrq_mois_1 }}</td>  
                        <td>{{ $billet->autr_amrq_mois_2 ?? '-' }}</td>  
                        <td>{{ $billet->autr_amrq_mois_3 }}</td>  
                        <td>{{ ($billet->iata_amrq_mois_1 + $billet->iata_amrq_mois_3) + ($billet->autr_amrq_mois_1 + $billet->autr_amrq_mois_3) }}</td>  
                    </tr>  
                    <tr>  
                        <td>Asie/Pacifique</td>  
                        <td>{{ $billet->iata_asi_mois_1 }}</td>  
                        <td>{{ $billet->iata_asi_mois_2 ?? '-' }}</td>  
                        <td>{{ $billet->iata_asi_mois_3 }}</td>  
                        <td>{{ $billet->autr_asi_mois_1 }}</td>  
                        <td>{{ $billet->autr_asi_mois_2 ?? '-' }}</td>  
                        <td>{{ $billet->autr_asi_mois_3 }}</td>  
                        <td>{{ ($billet->iata_asi_mois_1 + $billet->iata_asi_mois_3) + ($billet->autr_asi_mois_1 + $billet->autr_asi_mois_3) }}</td>  
                    </tr>  
                @endforeach  
            </tbody>  
        </table>  
    </div>  
</body>  
</html>