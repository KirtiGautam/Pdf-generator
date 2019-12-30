<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
    <h1>Hello {{ Session::get('userID') }}</h1>
    <button id="regstu">Get Registered students</button>
    <div id="stu" class="container">
        <div class="table-responsive">
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
                @foreach($data as $dat)
                <tr>
                    <td>  {{$dat->urn}} </td>
                    <td>  {{$dat->name}} </td>
                    <td>  {{$dat->email}} </td>
                    <td>  {{$dat->branch}} </td>
                    <td>  {{$dat->phone}} </td>
                    <td>  {{$dat->company_name}} </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>

</body>
<script>
    $("#stu").hide();
    $(document).ready(function() {

        $("#regstu").click( function(){
            $("#stu").toggle();
        });
    });
</script>

</html>