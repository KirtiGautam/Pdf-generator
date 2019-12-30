<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        .p {
            padding: 1%;
        }

        h1 {
            font-size: 50px;
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
            margin-top: 4%;
            margin-bottom: 4%;
            border-radius: 10%;
            background: transparent;
            font-size: 30px;
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
            border-radius: 25px;
            transition: 3s;
            background: transparent;
            color: chocolate;
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
        <center>
            <div class="form col-lg-8">
                <form action="" method="post">
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

</html>