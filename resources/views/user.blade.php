<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <h1>Hello {{ $dat["user"][0]->name }}</h1>
    @if($dat['user'][0]->role=='admin')
    <button id="regstu">Get Registered students</button>
    <button id='users'>Get Users</button>
    @elseif($dat['user'][0]->role=='executive')
    <button id="regstu">Get Registered students</button>
    @endif
    <div class="container">
        <div id='us'>
            <div class="table-responsive">
                <h3 align="center">Users:</h3>
                <table class="table table-striped table-bordered">
                    <thead>
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
                <thead>
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

</body>
<script>
    $("#stu").hide();
    $("#us").hide();
    $(document).ready(function() {
        $("#users").click(function() {
            $("#us").toggle();
        });
        $("#regstu").click(function() {
            $("#stu").toggle();
        });
    });
</script>

</html>