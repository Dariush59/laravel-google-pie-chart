<!DOCTYPE html>
<html>
<head>
    <title>Customer Region Pie Chart</title>
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
                        <form action="{{url('pie-chart')}}" method="post">
                            @csrf
                            <label for="region">Postcode</label>
                            <input type="number" name="region" placeholder="44869">
                            <input type="submit" value="Go">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>