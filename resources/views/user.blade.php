<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <style>
        body {
            background: url("https://www.ppt-backgrounds.net/uploads/formal-slides-powerpoint.jpg")
        }

        li {
            list-style-type: none;
            border-bottom: 2px solid dimgray;
            padding: 2%;
        }

        h1 {
            font-size: 35px;
            color: #DCDCDC;
        }

        .sidebar {
            height: 100%;
            width: 200px;
            position: fixed;
            z-index: 1;
            background-color: #000000;
            background-image: linear-gradient(315deg, #000000 0%, #414141 74%);
            overflow-x: hidden;
            font-size: 15px;
        }

        button {
            background: transparent;
            border: none;
            color: #DCDCDC;
        }

        .main {
            margin-left: 210px;
            margin-right: 10px;
        }

        table {
            background-color: #5b6467;
            background-image: linear-gradient(315deg, #5b6467 0%, #8b939a 74%);
        }

        button:hover{
            font-size:17px;
        }

        button:focus{
            color:burlywood;
            font-size:17px;
            outline: none;
        }

    </style>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar">
            <li>
                <h1>Hello {{ $dat["user"][0]->name }}</h1>
            </li>
            @if($dat['user'][0]->role=='admin')
            <li><button id="regstu">Get Registered students</button></li>
            <li><button id='users'>Get Users</button></li>
            @elseif($dat['user'][0]->role=='executive')
            <li><button id="regstu">Get Registered students</button></li>
            @endif
            <li><a href="/logout"><button>Logout</button></a></li>
        </div>
        <div class="main">
            <div id='us'>
                <div class="table-responsive">
                    <h3 align="center">Users:</h3>
                    <table class="table table-striped table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>Name</th>
                                <th>Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dat['users'] as $data)
                            <tr class="clickable-row">
                                <td> {{$data->name}}</td>
                                <td> <a href="\role?id={{ $data->id }}">{{$data->role}} </a></td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="stu" class="table-responsive">
                <h3 align="center">Registered Students:</h3>
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>URN</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Branch</th>
                            <th>Mobile</th>
                            <th>Company Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dat['students'] as $data)
                        <tr>
                            <td> {{$data->urn}} </td>
                            <td> {{$data->name}} </td>
                            <td> {{$data->email}} </td>
                            <td> {{$data->branch}} </td>
                            <td> {{$data->phone}} </td>
                            <td> {{$data->company_name}} </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
<script>
    $("#stu").hide();
    $("#us").hide();
    $(document).ready(function() {
        $("#users").click(function() {
            $("#us").show();
            $("#stu").hide();
        });
        $("#regstu").click(function() {
            $("#stu").show();
            $("#us").hide();
        });
    });
</script>

</html>