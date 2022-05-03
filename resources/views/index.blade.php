<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
                background-color:#f2f2f2;
                height:100vh;
            }
            .container {
                width: 70%;
                height: 90%;
                margin: 40px auto;
                background: rgb(242, 242, 242);
            }
            .outer {
                display: table;
                width: 100%;
                height: 100%;
            }
            .inner {
                display: table-cell;
                vertical-align: middle;
                text-align: center;
            }
            .centered {
                position: relative;
                display: inline-block;

                width: 50%;
                padding: 1em;
                background: rgb(242, 242, 242);
                color: white;
            }
        </style>
    </head>
    <body>
    <div class="container">
        <div class="outer">
            <div class="inner">
                <div class="centered">
                    <a href="importindb/" class="btn btn-success text-sm text-gray-700 dark:text-gray-500 underline">Import der Formel 1 Daten in die DB</a>
                    <a href="login/" class="btn btn-success text-sm text-gray-700 dark:text-gray-500 underline">Login zum Bearbeiten</a>

                </div>
            </div>
        </div>
    </div>
    </body>
</html>
