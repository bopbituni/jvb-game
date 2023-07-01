@extends('layouts.aoe_app')

@section('title', 'Thông tin game thủ')

@section('content')
    <div class="content-wrapper pt-80 pb-20 px-20">
    <div class="page-container box-shadow">
        <div class="mx-40 sp-mx-10">
            <div class="page-title pt-20">THÔNG TIN GAME THỦ</div>
        </div>
        <div class="pt-25 sp-pt-15 mx-80 sp-mx-20">
            <canvas id="myChart" style="width:100%;max-width:1500px"></canvas>
        </div>
    </div>
</div>
@endsection
@section('js')
<script type="text/javascript">
    var xValues = {!! json_encode($gamers) !!};
    var yValues = {!! json_encode($quantity) !!};
    var barColors = getColors(yValues.length);

    new Chart("myChart", {
        type: "bar",
        data: {
            labels: xValues,
            datasets: [{
            backgroundColor: barColors,
            data: yValues,
            borderWidth: 1
            }]
        }
    });

    function getColors(n) {
        var baseColors = [
            'rgba(255, 99, 132, 0.7)', 
            'rgba(54, 162, 235, 0.7)', 
            'rgba(255, 206, 86, 0.7)', 
            'rgba(75, 192, 192, 0.7)', 
            'rgba(153, 102, 255, 0.7)', 
            'rgba(255, 159, 64, 0.7)'
        ];
        var colors = [];
        for (var i = 0; i < n; i++) {
            colors.push(baseColors[i % baseColors.length]);
        }

        return colors;
    }
    </script>
@endsection
