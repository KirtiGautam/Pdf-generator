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
        body {
            background: url("https://searenitymarine.com.au/wp-content/uploads/2018/03/blue-abstract-background.jpg") no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .m {
            margin-top: 2%;
        }

        h1 {
            font-size: 8vmin;
        }

        .p {
            padding: 2%;
        }

        .form-control {
            border: none;
            border-bottom: 5px solid #DCDCDC;
            font-size: 3vmin;
            background: transparent;
        }

        .form-control:focus {
            transition: 3s;
            border: none;
            border-bottom: 5px solid #708090;
            font-size: 3vmin;
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

        .btn {
            font-size: 3vmin;
            width: 90%;
        }

        .btn-primary:hover {
            background-color: white;
            color: #0080FF;
        }

        .btn-primary:active {
            background-color: #0080FF;
            color: white;
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
            <h1 class="text-center">LOGIN TO CONTINUE</h1>
        </div>
        <div class="row">
            <div class="btn-group col-12 m p" role="group">
                <a href="{{ route('register') }}" type="button" class="btn btn-primary">Register</a>
                <a href="{{ route('form') }}" type="button" class="btn btn-dark">Form</a>
            </div>
        </div>
        @if($data['pend'])
        <div class="alert alert-warning" id="success-alert">
            <strong>Login failed!</strong> Your request has not been approved by admin
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        @if($data['auth'])
        <div class="alert alert-danger">
            <strong>Login failed!</strong> Username or Password Wrong!
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>