<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
    <a href="{{ route("route_test_tableau") }}">Lien vers la page Test Tableau</a>
    <a href="{{ route("url_vers_cgv") }}">Lien vers la page CGV</a>
    <a href="{{ route("route_equipe") }}">Lien vers la page equipe</a>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5 !</div>
            </div>
        </div>
    </body>
</html>
