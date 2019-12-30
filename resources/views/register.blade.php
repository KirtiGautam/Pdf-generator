<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    body{
        background: url("https://www.ppt-backgrounds.net/uploads/3d-slides-ppt.jpg");
    }
        .p {
            padding: 1%;
        }

        h1 {
            font-size: 50px;
        }

        .row{
            background: unset;
        }

        .jumbotron {
            background: #232526;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #414345, #232526);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #414345, #232526);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            color: wheat;
        }

        .form-group,
        .form-control,
        .btn {
            font-size: 20px;
            margin-top: 2%;
            margin-bottom: 2%;
            border-radius: 10%;
            background: transparent;
            font-size: 30px;
            color: #C0C0C0;
        }

        .btn {
            width: 90%;
            font-size: 30px;
        }

        .btn:hover {
            transition: 3s;
            border-radius: 100px;
        }

        .form-control:focus {
            border-radius: 50px;
            transition: 3s;
            background: transparent;
            color: #DCDCDC;
        }

        .form {
            background: #000000;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #434343, #000000);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #434343, #000000);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }
    </style>
</head>

<body>
    <div class="container">
        <div class="jumbotron text-center">
            <h1>Registration Form</h1>
        </div>
        <div class="row">
            <div class="btn-group col-12 m p" role="group">
                <a href="{{ route('login') }}" type="button" class="btn btn-primary">Login</a>
                <a href="{{ route('form') }}" type="button" class="btn btn-dark">Form</a>
            </div>
        </div>
        @if($flag)
        <div class="alert alert-success" id="success-alert">
            <strong>Success!</strong> Your request have been passed to the admin for registeration
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <center>
            <div class="form col-lg-8">
                <form action="{{ route('regauth') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group col-lg-10">
                        <div class="form-group col-lg-12">
                            <input type="text" name="name" id="name" placeholder="Enter First Name" class="form-control" required>
                            <input type="email" name="email" id="email" placeholder="Enter E-mail ID" class="form-control" required>
                            <input type="password" name="pass" id="pass" placeholder="Enter Password" class="form-control" required>
                            <input type="password" name="cpass" id="cpass" placeholder="Re-enter Password" class="form-control" required>
                            <input type="submit" value="Register" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </center>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>