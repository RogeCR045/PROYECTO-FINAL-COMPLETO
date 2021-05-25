@extends('layouts.dashboard')
@section('content')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<figure class="highcharts-figure">
    <div id="container"></div>
    <p class="highcharts-description">
        Contactos registrados por mes.
    </p>
</figure>
<figure class="highcharts-figure">
    <div id="container2"></div>
    <p class="highcharts-description">
        Edad de contactos por año.
    </p>
</figure>
<figure class="highcharts-figure">
    <div id="container3"></div>
    <p class="highcharts-description">
        Edad de contactos por año.
    </p>
</figure>
<script type="text/javascript">
    var contacts = < ? php echo json_encode($contacts) ? > ;
    Highcharts.chart('container', {
        chart: {
            type: 'area'
        },
        title: {
            text: 'Contactos'
        },
        subtitle: {
            text: 'Nuevos contactos'
        },
        xAxis: {
            categories: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre',
                'Octubre', 'Noviembre', 'Diciembre'
            ]
        },
        yAxis: {
            title: {
                text: 'Cantidad de contactos'
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
            name: 'Contactos',
            data: contacts
        }],
        responsive: {}
    });
</script>
{{-- Grafica para monstrar Edad de contactos --}}
<script type="text/javascript">
    var contacts2 = < ? php echo json_encode($contacts2) ? > ;
    Highcharts.chart('container2', {
        chart: {
            type: "column"
        },
        title: {
            text: 'Contactos'
        },
        subtitle: {
            text: 'Contacto por año'
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
                text: 'Cantidad de contactos'
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
            name: 'Contactos',
            data: contacts2
        }],
        responsive: {}
    });
</script>
<script type="text/javascript">
    var contacts2 = < ? php echo json_encode($contacts2) ? > ;
    Highcharts.chart('container3', {
        chart: {
            type: "bar"
        },
        title: {
            text: 'Contactos'
        },
        subtitle: {
            text: 'Contacto por año'
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
                text: 'Cantidad de contactos'
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
            name: 'Contactos',
            data: contacts2
        }],
        responsive: {}
    });
</script>
@endsection