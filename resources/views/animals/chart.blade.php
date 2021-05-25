@extends('layouts.dashboard')
@section('content')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<figure class="highcharts-figure">
    <div id="container"></div>
    <p class="highcharts-description">
        Animales registrados por mes.
    </p>
</figure>
<figure class="highcharts-figure">
    <div id="container2"></div>
    <p class="highcharts-description">
        Colores de pelaje animal.
    </p>
</figure>
<figure class="highcharts-figure">
    <div id="container3"></div>
    <p class="highcharts-description">
        Colores de pelaje animal.
    </p>
</figure>
<script type="text/javascript">
    var animals = < ? php echo json_encode($animals) ? > ;
    Highcharts.chart('container', {
        chart: {
            type: 'area'
        },
        title: {
            text: 'Animales'
        },
        subtitle: {
            text: 'Nuevos animales'
        },
        xAxis: {
            categories: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre',
                'Octubre', 'Noviembre', 'Diciembre'
            ]
        },
        yAxis: {
            title: {
                text: 'Cantidad de Animales'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'Animales',
            data: animals
        }],
        responsive: {}
    });
</script>
{{-- Grafica para monstrar cantidades de colores de pelaje de animales --}}
<script type="text/javascript">
    var animals2 = < ? php echo json_encode($animals2) ? > ;
    Highcharts.chart('container2', {
        chart: {
            type: "column"
        },
        title: {
            text: 'Animales'
        },
        subtitle: {
            text: 'Colores de pelaje animal'
        },
        xAxis: {
            categories: ['blue', 'brown', 'green', 'orange', 'pink', 'purple', 'red', 'yellow', 'cafe', 'green',
                'silver', 'fuchsia', 'black',
                'navy', 'lime', 'aqua', 'white', 'gray', 'maroon', 'olive', 'purple', 'teal'
            ]
        },
        yAxis: {
            title: {
                text: 'Cantidad de animales'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'Animales',
            data: animals2
        }],
        responsive: {}
    });
</script>
<script type="text/javascript">
    var animals2 = < ? php echo json_encode($animals2) ? > ;
    Highcharts.chart('container3', {
        chart: {
            type: "bar"
        },
        title: {
            text: 'Animales'
        },
        subtitle: {
            text: 'Colores de pelaje animal'
        },
        xAxis: {
            categories: ['blue', 'brown', 'green', 'orange', 'pink', 'purple', 'red', 'yellow', 'cafe', 'green',
                'silver', 'fuchsia', 'black',
                'navy', 'lime', 'aqua', 'white', 'gray', 'maroon', 'olive', 'purple', 'teal'
            ]
        },
        yAxis: {
            title: {
                text: 'Cantidad de animales'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'Animales',
            data: animals2
        }],
        responsive: {}
    });
</script>
@endsection