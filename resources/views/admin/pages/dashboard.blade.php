@extends('admin.layout.layout')

@section('title', 'Dashboard')

@section('title-bar', 'Dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-xxl-12">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card avtivity-card">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <p class="fs-14 mb-2">Total Earthquake</p>
                                        <span class="title text-black font-w600">{{ $jumlah_gempa }}</span>
                                    </div>
                                </div>
                                <div class="progress" style="height:5px;">
                                    <div class="progress-bar bg-success" style="width: 42%; height:5px;" aria-label="Progess-success" role="progressbar">
                                        <span class="sr-only">42% Complete</span>
                                    </div>
                                </div>
                            </div>
                            <div class="effect bg-success"></div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card avtivity-card">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <p class="fs-14 mb-2">Total Deaths</p>
                                        <span class="title text-black font-w600">{{ $totalmati }}</span>
                                    </div>
                                </div>
                                <div class="progress" style="height:5px;">
                                    <div class="progress-bar bg-success" style="width: 42%; height:5px;" aria-label="Progess-success" role="progressbar">
                                        <span class="sr-only">42% Complete</span>
                                    </div>
                                </div>
                            </div>
                            <div class="effect bg-success"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-xxl-12">
                <div class="card">
                    <div class="card-body">
                        <canvas id="myLineChart" width="400" height="200"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    @parent

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var labels = @json($labels);
            var dataMati = @json($dataMati);

            var ctx = document.getElementById('myLineChart').getContext('2d');
            var myLineChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Deaths',
                        data: dataMati,
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 2,
                        fill: false
                    }]
                },
                options: {
    scales: {
        xAxes: [{
            type: 'time',
            time: {
                unit: 'day',
                displayFormats: {
                    day: 'MMM D'
                },
            },
            scaleLabel: {
                display: true,
                labelString: 'Date'
            }
        }],
        yAxes: [{
            ticks: {
                beginAtZero: true,
                callback: function(value) { return value; }
            },
            scaleLabel: {
                display: true,
                labelString: 'Number of Deaths'
            }
        }]
    }
}

            });
        });
    </script>
@endsection
