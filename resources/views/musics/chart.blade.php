@extends('layouts.dashboard')
@section('content')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<figure class="highcharts-figure">
    <div id="container"></div>
    <p class="highcharts-description">
        Canciones registradas.
    </p>
</figure>
<figure class="highcharts-figure">
    <div id="container2"></div>
    <p class="highcharts-description">
        Canciones por año.
    </p>
</figure>
<figure class="highcharts-figure">
    <div id="container3"></div>
    <p class="highcharts-description">
        Canciones por año.
    </p>
</figure>
<script type="text/javascript">
    var musics = < ? php echo json_encode($musics) ? > ;
    Highcharts.chart('container', {
        chart: {
            type: 'area'
        },
        title: {
            text: 'Canciones'
        },
        subtitle: {
            text: 'Nuevas canciones'
        },
        xAxis: {
            categories: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre',
                'Octubre', 'Noviembre', 'Diciembre'
            ]
        },
        yAxis: {
            title: {
                text: 'Cantidad de canciones'
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
            name: 'Canciones',
            data: musics
        }],
        responsive: {}
    });
</script>
{{-- Grafica para monstrar canciones agrupadas por años de estreño --}}
<script type="text/javascript">
    var musics2 = < ? php echo json_encode($musics2) ? > ;
    Highcharts.chart('container2', {
        chart: {
            type: "bar"
        },
        title: {
            text: 'Canciones'
        },
        subtitle: {
            text: 'Canciones por año'
        },
        xAxis: {
            categories: ['1970', '1972', '1974', '1976', '1978', '1980', '1982', '1984', '1986', '1988', '1990',
                '1992', '1994', '1996', '1998',
                '2000', '2002', '2004', '2008', '2010', '2012', '2014', '2016', '2018', '2020', '2021', '2022'
            ]
        },
        yAxis: {
            title: {
                text: 'Cantidad de canciones'
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
            name: 'Canciones',
            data: musics2
        }],
        responsive: {}
    });
</script>
<script type="text/javascript">
    var musics3 = < ? php echo json_encode($musics2) ? > ;
    Highcharts.chart('container3', {
        chart: {
            type: "column"
        },
        title: {
            text: 'Canciones'
        },
        subtitle: {
            text: 'Canciones por año'
        },
        xAxis: {
            categories: ['1970', '1972', '1974', '1976', '1978', '1980', '1982', '1984', '1986', '1988', '1990',
                '1992', '1994', '1996', '1998',
                '2000', '2002', '2004', '2008', '2010', '2012', '2014', '2016', '2018', '2020', '2021', '2022'
            ]
        },
        yAxis: {
            title: {
                text: 'Cantidad de canciones'
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
            name: 'Canciones',
            data: musics3
        }],
        responsive: {}
    });
</script>
@endsection