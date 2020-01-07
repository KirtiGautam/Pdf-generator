<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Role</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        body {
            background: url("http://hdqwalls.com/wallpapers/4k-texture-simple-background-21.jpg") no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        h1 {
            font-size: 10vmin;
            margin-top: 3vmin;
            margin-bottom: 3vmin;
        }

        .form-control {
            font-size: 5vmin;
            margin-top: 3vmin;
            margin-bottom: 3vmin;
            background: black;
            color: #DCDCDC;
        }

        .form-control:focus {
            background: #2F4F4F;
            color: #D3D3D3;
        }

        .btn {
            margin-top: 2vmin;
            font-size: 3vmin;
            width: 35%;
        }

        .btn-primary:hover {
            background-color: white;
            color: #0080FF;
        }

        .btn-primary:active {
            background-color: #0080FF;
            color: white;
        }
    </style>
</head>

<body>

    <body>
        <div class="container">
            <center>
                <h1>Choose role for {{$user[0]->name}}:</h1>
                <form action="/role/change" method="get">
                    <input type="text" name="id" id="" value='{{ $user[0]->id }}' style="visibility: hidden">
                    <div class="form-group">
                        <div class="input-group col-lg-5">
                            <select name="changed" class="form-control">
                                <option value="admin">Admin</option>
                                <option value="executive">Executive</option>
                            </select>
                        </div>
                        <input type="submit" value="Change role" class="btn btn-primary">
                    </div>
                </form>
            </center>
        </div>
    </body>
</body>

</html>