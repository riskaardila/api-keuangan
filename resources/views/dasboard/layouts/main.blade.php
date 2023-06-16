{{-- @extends('layouts.main') --}}

<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Finance Tensai</title>

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="tables.css">
    <link rel="stylesheet" href="style.css">
    <link href="css/dasboard.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    @include('dasboard.layouts.header')
    <div class="container-fluid">
        <div class="row">
            @include('dasboard.layouts.sidebar')

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                @yield('container')

                <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js"
        integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous">
    </script>
    <script src="dashboard.js"></script>
</body>

</html>
