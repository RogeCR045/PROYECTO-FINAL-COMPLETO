@extends('layouts.dashboard')
@section('content')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<figure class="highcharts-figure">
    <div id="container"></div>
    <p class="highcharts-description">
        Profesiones registradas.
    </p>
</figure>
<figure class="highcharts-figure">
    <div id="container2"></div>
    <p class="highcharts-description">
        Profesion por año.
    </p>
</figure>
<figure class="highcharts-figure">
    <div id="container3"></div>
    <p class="highcharts-description">
        Profesion por año.
    </p>
</figure>
<script type="text/javascript">
    var professions = < ? php echo json_encode($professions) ? > ;
    Highcharts.chart('container', {
        chart: {
            type: 'area'
        },
        title: {
            text: 'Profesiones'
        },
        subtitle: {
            text: 'Nuevas profesiones'
        },
        xAxis: {
            categories: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre',
                'Octubre', 'Noviembre', 'Diciembre'
            ]
        },
        yAxis: {
            title: {
                text: 'Cantidad de Profesiones'
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
            name: 'Professiones',
            data: professions
        }],
        responsive: {}
    });
</script>
{{-- Grafica para monstrar professiones agrupadas por años de profesión --}}
<script type="text/javascript">
    var professions2 = < ? php echo json_encode($professions2) ? > ;
    Highcharts.chart('container2', {
        chart: {
            type: "column"
        },
        title: {
            text: 'Profesiones'
        },
        subtitle: {
            text: 'Profesion por año'
        },
        xAxis: {
            categories: ['0 Año', '2 Años', '4 Años', '6 Años', '8 Años', '10 Años', '12 Años', '14 Años',
                '16 Años', '18 Años',
                '20 Años', '22 Años', '24 Años', '26 Años', '28 Años', '30 Años', '32 Años', '34 Años',
                '36 Años', '38 Años', '40 Años'
            ]
        },
        yAxis: {
            title: {
                text: 'Cantidad de profesionistas'
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
            name: 'Professiones',
            data: professions2
        }],
        responsive: {}
    });
</script>
<script type="text/javascript">
    var professions2 = < ? php echo json_encode($professions2) ? > ;
    Highcharts.chart('container3', {
        chart: {
            type: "pie"
        },
        title: {
            text: 'Profesiones'
        },
        subtitle: {
            text: 'Profesion por año'
        },
        xAxis: {
            categories: ['0 Año', '2 Años', '4 Años', '6 Años', '8 Años', '10 Años', '12 Años', '14 Años',
                '16 Años', '18 Años',
                '20 Años', '22 Años', '24 Años', '26 Años', '28 Años', '30 Años', '32 Años', '34 Años',
                '36 Años', '38 Años', '40 Años'
            ]
        },
        yAxis: {
            title: {
                text: 'Cantidad de profesionistas'
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
            name: 'Professiones',
            data: professions2
        }],
        responsive: {}
    });
</script>
@endsection