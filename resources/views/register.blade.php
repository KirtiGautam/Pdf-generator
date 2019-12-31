<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
            background: url("https://norlitenursingcenter.com/images/backgroundImage3.jpg") no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .p {
            padding: 1vmin;
        }

        h1 {
            font-size: 7vmin;
        }

        .row {
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
        .form-control {
            font-size: 4vmin;
            margin-top: 1vmin;
            margin-bottom: 1vmin;
            border-radius: 10%;
            background: transparent;
            color: #C0C0C0;
        }

        .btn {
            width: 90%;
            font-size: 4vmin;
        }

        .btn:hover {
            transition: 3s;
            border-radius: 100px;
        }

        .form-control:focus {
            border-radius: 5vmin;
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
                <a href="{{ route('login') }}" type="button" class="btn btn-secondary">Login</a>
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
                <form action="{{ route('regauth') }}" method="post" enctype="multipart/form-data" onsubmit="return vald()">
                    @csrf
                    <div class="input-group col-lg-10">
                        <div class="form-group col-lg-12">
                            <input type="text" name="name" id="name" placeholder="Enter First Name" class="form-control" required><div id='nameerr' style='color:red'></div>
                            <input type="email" name="email" id="email" placeholder="Enter E-mail ID" class="form-control" required><div id='emailerr' style='color:red'></div>
                            <input type="password" name="pass" id="pass" placeholder="Enter Password" class="form-control" required><div id='passerr' style='color:red'></div>
                            <input type="password" name="cpass" id="cpass" placeholder="Re-enter Password" class="form-control" required><span id='cpasserr' style='color:red'></span>
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
<script>
    function vald() {
        var name = document.getElementById('name');
        var email = document.getElementById('email');
        var password = document.getElementById('pass');
        var cpassword = document.getElementById('cpass');

        if (name.value == "") {
            $('#nameerr').text('Please enter your name');
            name.focus();
            return false;
        }

        if (email.value == "") {
            $('#emaileerr').text('Please enter your email');
            email.focus();
            return false;
        }

        if (password.value == "") {
            $('#passerr').text("Please enter your password");
            password.focus();
            return false;
        }

        if(password.value!=cpassword.value){
            $('#cpasserr').text("Passwords don't match");
            cpassword.focus();
            return false;
        }

        if(password.value.length<8){
            $('#passerr').text("Password must be longer than 8 digits");
            password.focus();
            return false;
        }

        return true;
    }
</script>

</html>