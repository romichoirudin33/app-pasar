@extends('layouts.public')

@section('content')
    <h6 class="mb-4 text-right">
        <strong>Grafik PAD </strong>(Pendapatan Asli Daerah)
    </h6>
    <div class="chart">
        <canvas id="lineChart" style="height:400px; min-height:400px"></canvas>
    </div>
@endsection


@section('js')
    <!-- ChartJS -->
    <script src="{{ asset('css/plugins/chart.js/Chart.min.js') }}"></script>
    <script>
        $(function () {
            var areaChartData = {
                labels  : [
                    @foreach($pasar as $p)
                        '{{ $p->nama }}',
                    @endforeach
                ],
                datasets: [
                    {
                        label               : 'Digital Goods',
                        backgroundColor     : 'rgba(60,141,188,0.9)',
                        borderColor         : 'rgba(60,141,188,0.8)',
                        pointRadius          : false,
                        pointColor          : '#3b8bba',
                        pointStrokeColor    : 'rgba(60,141,188,1)',
                        pointHighlightFill  : '#fff',
                        pointHighlightStroke: 'rgba(60,141,188,1)',
                        data                : [
                            @foreach($pasar as $p)
                            {{ $p->survei->potensi_pad }},
                            @endforeach
                        ]
                    }
                ]
            };

            var areaChartOptions = {
                maintainAspectRatio : false,
                responsive : true,
                legend: {
                    display: false
                },
                scales: {
                    xAxes: [{
                        gridLines : {
                            display : false,
                        }
                    }],
                    yAxes: [{
                        gridLines : {
                            display : false,
                        }
                    }]
                }
            }

            //-------------
            //- LINE CHART -
            //--------------
            var lineChartCanvas = $('#lineChart').get(0).getContext('2d');
            var lineChartOptions = jQuery.extend(true, {}, areaChartOptions);
            var lineChartData = jQuery.extend(true, {}, areaChartData);
            lineChartData.datasets[0].fill = false;
            lineChartOptions.datasetFill = false;

            var lineChart = new Chart(lineChartCanvas, {
                type: 'line',
                data: lineChartData,
                options: lineChartOptions
            });
        })
    </script>
@endsection