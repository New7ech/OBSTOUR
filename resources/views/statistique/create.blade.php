@extends('layouts.app')
@section('contenus')

<div class="container">
    <div class="page-inner">
        <div class="shadow-lg p-3 mb-5 bg-body rounded">
            <div class="text-center">
                <p class="fs-3">Statistiques des Circuits Réalisés</p>
            </div>
        </div>
        <div class="chart-container">
            <canvas id="statisticsChart"></canvas>
        </div>
    </div>
</div>

<!-- Inclusion de Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var ctx = document.getElementById('statisticsChart').getContext('2d');

        var data = {
            labels: ["Jan", "Feb", "Mar"],
            datasets: [
                {
                    label: "CIRCUITS INTER-ETATS Mois 1",
                    data: @json($statistique->pluck('cur_etat_m1')),
                    borderColor: 'rgba(75, 192, 192, 1)',
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                },
                {
                    label: "CIRCUITS INTER-ETATS Mois 2",
                    data: @json($statistique->pluck('cur_etat_m2')),
                    borderColor: 'rgba(54, 162, 235, 1)',
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                },
                {
                    label: "CIRCUITS INTER-ETATS Mois 3",
                    data: @json($statistique->pluck('cur_etat_m3')),
                    borderColor: 'rgba(255, 206, 86, 1)',
                    backgroundColor: 'rgba(255, 206, 86, 0.2)',
                },
                {
                    label: "CIRCUITS INTERNES Mois 1",
                    data: @json($statistique->pluck('cur_int_m1')),
                    borderColor: 'rgba(153, 102, 255, 1)',
                    backgroundColor: 'rgba(153, 102, 255, 0.2)',
                },
                {
                    label: "CIRCUITS INTERNES Mois 2",
                    data: @json($statistique->pluck('cur_int_m2')),
                    borderColor: 'rgba(255, 159, 64, 1)',
                    backgroundColor: 'rgba(255, 159, 64, 0.2)',
                },
                {
                    label: "CIRCUITS INTERNES Mois 3",
                    data: @json($statistique->pluck('cur_int_m3')),
                    borderColor: 'rgba(201, 203, 207, 1)',
                    backgroundColor: 'rgba(201, 203, 207, 0.2)',
                },
                {
                    label: "EXCURSIONS Mois 1",
                    data: @json($statistique->pluck('cur_excu_m1')),
                    borderColor: 'rgba(255, 99, 132, 1)',
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                },
                {
                    label: "EXCURSIONS Mois 2",
                    data: @json($statistique->pluck('cur_excu_m2')),
                    borderColor: 'rgba(54, 162, 235, 1)',
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                },
                {
                    label: "EXCURSIONS Mois 3",
                    data: @json($statistique->pluck('cur_excu_m3')),
                    borderColor: 'rgba(255, 206, 86, 1)',
                    backgroundColor: 'rgba(255, 206, 86, 0.2)',
                }
            ]
        };

        var options = {
            responsive: true,
            maintainAspectRatio: false,
        };

        new Chart(ctx, {
            type: 'line',
            data: data,
            options: options
        });
    });
</script>

@endsection
