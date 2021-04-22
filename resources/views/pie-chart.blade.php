<!DOCTYPE html>
<html>
<head>
    <title>Available Funding Objects</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <style type="text/css">
        .box{
            width:800px;
            margin:0 auto;
        }
    </style>
</head>
<body>
<div class="container" style="margin-top: 50px;">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Customer Region Pie Chart <h3>
                </div>
                <div class="panel-body" align="center">
                    <div id="pie_chart" style="width:750px; height:450px;">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">

{{--    var analytics =  "{{$inquiries}}";--}}
    var analytics = <?php echo $inquiries; ?>

    var result = [];
     for(var i in analytics)
        result[i] = analytics[i];

    console.log(analytics);
    // console.log(JSON.parse(analytics));
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);
console.log(result);
console.log(result['purchase']);
    function drawChart()
    {
        var data = google.visualization.arrayToDataTable([
                ['Funding Objects', 'value'],
                ['purchase', result['purchase']],
                ['new_building', result['new_building']],
                ['plot_only', result['plot_only']]
        ]);

        var options = {'title':'Available Funding Objects'};

        var chart = new google.visualization.PieChart(document.getElementById('pie_chart'));
        chart.draw(data, options);
    }
</script>
</body>
</html>