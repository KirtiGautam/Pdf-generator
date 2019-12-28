<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        .m {
            margin: 1%;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="jumbotron">
            <h1 class="text-center">LOGIN TO CONTINUE</h1>
        </div>
        <div class="row">
            <div class="btn-group col-lg-12 m" role="group">
                <a href="{{ route('register') }}" type="button" class="btn btn-primary">Register</a>
                <a href="{{ route('form') }}" type="button" class="btn btn-dark">Form</a>
            </div>
        </div>
        <form action="{{  route('auth')  }}" method="POST" class="m" enctype="multipart/form-data">
            <div class="form-group m p col-12">
                <i class="material-icons">email</i><input type="email" name="email" id="email" placeholder="Email" class="flow-control">
                <i class="material-icons">lock</i><input type="password" name="pass" id="pass" placeholder="Password" class="flow-control">
                {{ csrf_field() }}
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
</body>

</html>