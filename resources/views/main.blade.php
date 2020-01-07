<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        body {
            background: url("http://protopolitics.com/wp-content/uploads/2018/05/formal-ppt-slides-background-8.jpg") no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        h1 {
            font-size: 10vmin;
        }

        .btn {
            font-size: 3vmin;
            width: 90%;
        }

        .btn-primary:hover {
            background-color: white;
            color: #0080FF;
        }

        .btn-primary:active {
            background-color: unset;
            color: unset;
        }

        .btn-dark:hover {
            background-color: white;
            color: #424242;
        }

        .btn-dark:active {
            background-color: unset;
            color: unset;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="jumbotron">
            <h1>PDFGenerator</h1>
            <h2>This PDF Generator can be used to generate a pdf using laravel framework.</h2>
        </div>
        <div class="row">
            <div class="btn-group col-lg-12" role="group">
                <a href="{{ route('login') }}" type="button" class="btn btn-primary">Login</a>
                <a href="{{ route('register') }}" type="button" class="btn btn-dark">Register</a>
                <a href="{{ route('form') }}" type="button" class="btn btn-primary">Form</a>
            </div>
        </div>
    </div>
</body>

</html>