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
            margin-top: 3%;
        }

        .p {
            padding: 2%;
        }

        .form-control {
            border: none;
            border-bottom: 5px solid #DCDCDC;
            font-size: 20px;
            background: transparent;
        }

        .form-control:focus {
            transition: 3s;
            border: none;
            border-bottom: 5px solid #708090;
            font-size: 20px;
            background: transparent;
        }

        .form {
            margin-top: 3%;
            border: 5px solid black;
            background-color: black;
            border-radius: 50px;
        }

        .material-icons {
            font-size: 40px;
            color: #C0C0C0;
        }

        .btn{
            font-size: 20px;
            width: 90%;
        }

        .btn:hover{
            border-radius: 25px;
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="jumbotron">
            <h1 class="text-center">LOGIN TO CONTINUE</h1>
        </div>
        <div class="row">
            <div class="btn-group col-12 m p" role="group">
                <a href="{{ route('register') }}" type="button" class="btn btn-primary">Register</a>
                <a href="{{ route('form') }}" type="button" class="btn btn-dark">Form</a>
            </div>
        </div>
        @if($pend)
        <div class="alert alert-warning" id="success-alert">
            <strong>Login failed</strong> Your request has not been approved by admin
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <center>
            <div class="form col-lg-6">
                <form action="{{  route('auth')  }}" method="POST" class="m" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="input-group m p">
                            <i class="material-icons">email</i><input type="email" name="email" id="email" placeholder="Email" class="form-control">
                        </div>
                        <div class="input-group m p">
                            <i class="material-icons">lock</i><input type="password" name="pass" id="pass" placeholder="Password" class="form-control">
                        </div>
                        <center>
                            <div class="form-group m p">
                                {{ csrf_field() }}
                                <input type="submit" value="Login" class="btn btn-primary m p ">
                            </div>
                        </center>
                    </div>
                </form>
            </div>
        </center>
    </div>
</body>

</html>