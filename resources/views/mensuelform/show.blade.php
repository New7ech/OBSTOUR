{{-- les statistique coorectes --}}
@extends('layouts.app')
@section('contenus')
{{-- les statistique --}}
    <!-- Fonts and icons -->

  <body>
      
        <div class="container">
          <div class="page-inner">
            <h3 class="fw-bold mb-3">STATISTIQUE DES ENREGISTREMENTS</h3>
            <div class="row">
              {{-- <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">Doughnut Chart</div>
                  </div>
                  <div class="card-body">
                    <div class="chart-container">
                      <canvas
                        id="doughnutChart"
                        style="width: 50%; height: 50%"
                      ></canvas>
                    </div>
                  </div>
                </div>
              </div> --}}
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">Statistique du Chiffre d'affaires des circuits réalisés</div>
                  </div>
                  <div class="card-body">
                    <div class="chart-container">
                      <canvas id="multipleBarChart"></canvas>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">Statistique du Chiffre d'affaires des circuits réalisés</div>
                  </div>
                  <div class="card-body">
                    
                    <div class="chart-container">
                      <canvas id="htmlLegendsChart"></canvas>
                    </div>
                    <div id="myChartLegend"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      
    <
    <!-- Chart JS -->
    <script src="../assets/js/plugin/chart.js/chart.min.js"></script>
    <!-- jQuery Scrollbar -->
    <script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <!-- Kaiadmin JS -->
    <script src="../assets/js/kaiadmin.min.js"></script>
    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src="../assets/js/setting-demo2.js"></script>
    <script>
      var 
        // doughnutChart = document
        //   .getElementById("doughnutChart")
        //   .getContext("2d"),
        multipleBarChart = document
          .getElementById("multipleBarChart")
          .getContext("2d"),
        htmlLegendsChart = document
          .getElementById("htmlLegendsChart")
          .getContext("2d");
    //   var myDoughnutChart = new Chart(doughnutChart, {
    //     type: "doughnut",
    //     data: {
    //       datasets: [
    //         {
    //           data: [
    //             @json($cacircuit->pluck('volume_conference')),
    //             @json($cacircuit->pluck('volume_conference')),
    //             @json($cacircuit->pluck('volume_conference')),

    //           ],
    //           backgroundColor: ["#f3545d", "#fdaf4b", "#1d7af3"],
    //         },
    //       ],

    //       labels: [
    //         "Red", "Yellow", "Blue"],
    //     },
    //     options: {
    //       responsive: true,
    //       maintainAspectRatio: false,
    //       legend: {
    //         position: "bottom",
    //       },
    //       layout: {
    //         padding: {
    //           left: 20,
    //           right: 20,
    //           top: 20,
    //           bottom: 20,
    //         },
    //       },
    //     },
    //   });
    var myMultipleBarChart = new Chart(multipleBarChart, {
        type: "bar",
        data: {
          labels: [
            @foreach($cacircuit as $item)  
            "{{ $item->mois }}",   
            @endforeach
          ],
          datasets: [
            {
              label: "Circuit inter-Etat",
              backgroundColor: "#59d05d",
              borderColor: "#59d05d",
              data: [
                @foreach($cacircuit as $item)  
                {{ $item->ca_cur_int_etat }},   
                @endforeach 
              ],
            },
            {
              label: "Circuit internes",
              backgroundColor: "#fdaf4b",
              borderColor: "#fdaf4b",
              data: [
                @foreach($cacircuit as $item)  
                {{ $item->ca_cur_int }},   
                @endforeach 
              ],
            },
            {
              label: "Excursions",
              backgroundColor: "#177dff",
              borderColor: "#177dff",
              data: [
                @foreach($cacircuit as $item)  
                {{ $item->ca_cur_excu }},   
                @endforeach
              ],
            },
          ],
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          legend: {
            position: "bottom",
          },
          title: {
            display: true,
            text: "Histogramme",
          },
          tooltips: {
            mode: "index",
            intersect: false,
          },
          responsive: true,
          scales: {
            xAxes: [
              {
                stacked: true,
              },
            ],
            yAxes: [
              {
                stacked: true,
              },
            ],
          },
        },
      });
      var gradientStroke = htmlLegendsChart.createLinearGradient(
        500,
        0,
        100,
        0
      );
      gradientStroke.addColorStop(0, "#177dff");
      gradientStroke.addColorStop(1, "#80b6f4");

      var gradientFill = htmlLegendsChart.createLinearGradient(500, 0, 100, 0);
      gradientFill.addColorStop(0, "rgba(23, 125, 255, 0.7)");
      gradientFill.addColorStop(1, "rgba(128, 182, 244, 0.3)");

      var gradientStroke2 = htmlLegendsChart.createLinearGradient(
        500,
        0,
        100,
        0
      );
      gradientStroke2.addColorStop(0, "#f3545d");
      gradientStroke2.addColorStop(1, "#ff8990");

      var gradientFill2 = htmlLegendsChart.createLinearGradient(500, 0, 100, 0);
      gradientFill2.addColorStop(0, "rgba(243, 84, 93, 0.7)");
      gradientFill2.addColorStop(1, "rgba(255, 137, 144, 0.3)");

      var gradientStroke3 = htmlLegendsChart.createLinearGradient(
        500,
        0,
        100,
        0
      );
      gradientStroke3.addColorStop(0, "#fdaf4b");
      gradientStroke3.addColorStop(1, "#ffc478");

      var gradientFill3 = htmlLegendsChart.createLinearGradient(500, 0, 100, 0);
      gradientFill3.addColorStop(0, "rgba(253, 175, 75, 0.7)");
      gradientFill3.addColorStop(1, "rgba(255, 196, 120, 0.3)");

      var myHtmlLegendsChart = new Chart(htmlLegendsChart, {
        type: "line",
        data: {
          labels: [
            @foreach($cacircuit as $item)  
            "{{ $item->mois }}",   
            @endforeach
          ],
          datasets: [
            {
              label: "Circuit inter-Etat ",
              borderColor: gradientStroke2,
              pointBackgroundColor: gradientStroke2,
              pointRadius: 0,
              backgroundColor: gradientFill2,
              legendColor: "#f3545d",
              fill: true,
              borderWidth: 1,
              data: [
                @foreach($cacircuit as $item)  
                {{ $item->ca_cur_int_etat }},   
                @endforeach 
              ],
            },
            {
              label: "Circuit internes ",
              borderColor: gradientStroke3,
              pointBackgroundColor: gradientStroke3,
              pointRadius: 0,
              backgroundColor: gradientFill3,
              legendColor: "#fdaf4b",
              fill: true,
              borderWidth: 1,
              data: [
                @foreach($cacircuit as $item)  
                {{ $item->ca_cur_int }},   
                @endforeach
              ],
            },
            {
              label: "Excursions",
              borderColor: gradientStroke,
              pointBackgroundColor: gradientStroke,
              pointRadius: 0,
              backgroundColor: gradientFill,
              legendColor: "#177dff",
              fill: true,
              borderWidth: 1,
              data: [
                @foreach($cacircuit as $item)  
                {{ $item->ca_cur_excu }},   
                @endforeach 
              ],
            },
          ],
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          legend: {
            display: false,
          },
          tooltips: {
            bodySpacing: 4,
            mode: "nearest",
            intersect: 0,
            position: "nearest",
            xPadding: 10,
            yPadding: 10,
            caretPadding: 10,
          },
          layout: {
            padding: { left: 15, right: 15, top: 15, bottom: 15 },
          },
          scales: {
            yAxes: [
              {
                ticks: {
                  fontColor: "rgba(0,0,0,0.5)",
                  fontStyle: "500",
                  beginAtZero: false,
                  maxTicksLimit: 5,
                  padding: 20,
                },
                gridLines: {
                  drawTicks: false,
                  display: false,
                },
              },
            ],
            xAxes: [
              {
                gridLines: {
                  zeroLineColor: "transparent",
                },
                ticks: {
                  padding: 20,
                  fontColor: "rgba(0,0,0,0.5)",
                  fontStyle: "500",
                },
              },
            ],
          },
          legendCallback: function (chart) {
            var text = [];
            text.push('<ul class="' + chart.id + '-legend html-legend">');
            for (var i = 0; i < chart.data.datasets.length; i++) {
              text.push(
                '<li><span style="background-color:' +
                  chart.data.datasets[i].legendColor +
                  '"></span>'
              );
              if (chart.data.datasets[i].label) {
                text.push(chart.data.datasets[i].label);
              }
              text.push("</li>");
            }
            text.push("</ul>");
            return text.join("");
          },
        },
      });

      var myLegendContainer = document.getElementById("myChartLegend");

      // generate HTML legend
      myLegendContainer.innerHTML = myHtmlLegendsChart.generateLegend();

      // bind onClick event to all LI-tags of the legend
      var legendItems = myLegendContainer.getElementsByTagName("li");
      for (var i = 0; i < legendItems.length; i += 1) {
        legendItems[i].addEventListener("click", legendClickCallback, false);
      }
    </script>
@endsection