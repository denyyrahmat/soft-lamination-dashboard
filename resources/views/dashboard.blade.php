<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Monitoring</title> 

  {{-- CSS file --}}
  <link rel="stylesheet" href="{{ asset('css\style.css') }}">

  {{-- Bootstrap --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
  <nav class="bg-purple text-light p-3 text-center fw-semibold h2">MONITORING DATA MACHINE SOFT LAMINATE <span class="text-warning">[WOOD WORKING]</span></nav>

  <div class="row m-5">
    <div class="col-sm-4">
      <figure class="highcharts-figure">
        <div id="distance1"></div>
      </figure>
    </div>

    <div class="col-sm-4">
      <figure class="highcharts-figure">
        <div id="distance2"></div>
     </figure>
    </div>

    <div class="col-sm-4">
      <figure class="highcharts-figure">
        <div id="distance3"></div>
      </figure>
    </div>

    <div class="col-sm-6">
      <figure class="highcharts-figure">
        <div id="roll_temp"></div>
      </figure>
    </div>

    <div class="col-sm-6">
      <figure class="highcharts-figure">
        <div id="dryZone_temp"></div>
      </figure>
    </div>
  </div>
  
  {{-- Highcharts --}}
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/modules/export-data.js"></script>
  <script src="https://code.highcharts.com/modules/accessibility.js"></script>

  {{-- Bootsrap --}}
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  
  {{-- JS file --}}
  <script src="{{ asset('js\script.js') }}"></script>

</body>

</html>