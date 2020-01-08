<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}" />
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <style>
        body {
            background: #CAC531;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #F3F9A7, #CAC531);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #F3F9A7, #CAC531); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }

        li {
            list-style-type: none;
            border-bottom: 2px solid dimgray;
            padding: 1vmin;
        }

        h1 {
            font-size: 5vmin;
            color: #D8D8D8;
        }

        .sidebar {
            height: 100%;
            width: 25vmin;
            position: fixed;
            z-index: 1;
            background-color: #000000;
            background-image: linear-gradient(315deg, #000000 0%, #414141 74%);
            overflow-x: hidden;
            font-size: 3vmin;
        }

        button {
            background: transparent;
            border: none;
            color: #BDBDBD;
        }

        .main {
            margin-left: 26vmin;
            margin-right: 2vmin;
        }

        .table {
            background: #757F9A;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #D7DDE8, #757F9A);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #D7DDE8, #757F9A);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            position: relative;
            border-collapse: collapse;
            font-size: 2vmin;
        }

        .input-group{
            font-size:3vmin;
        }
        
        .form-control{
            margin-top: 1vmin;
            margin-bottom: 1vmin;
        }

        .form-label{
            margin-top: 2vmin;
            margin-bottom: 2vmin;
        }

        th {
            background: white;
            position: sticky;
            top: 0;
            box-shadow: 0 2px 2px -1px rgba(0, 0, 0, 0.4);
        }

        button:hover {
            color: #F5A9BC;
        }

        button:focus {
            color: #5858FA;
            font-size: 3vmin;
            outline: none;
        }

        a {
            color: black;
            text-transform: uppercase;
        }

        h3 {
            font-size: 6vmin;
            margin-top: 5vmin;
            margin-bottom: 5vmin;
        }

        h3 {
            font-size: 6vmin;
        }

        #sss {
            overflow-x: scroll;
            overflow-y: scroll;
        }
        .btn {
            font-size: 3vmin;
            width: 90%;
        }

        .btn-success:hover {
            background-color: white;
            color: #088A29;
        }

        .btn-success:active {
            background-color: unset;
            color: unset;
        }

        .btn-danger:hover {
            background-color: white;
            color: #FE2E2E;
        }

        .btn-danger:active {
            background-color: unset;
            color: unset;
        }

        .pagination{
            font-size: 2vmin;
        }

        .page-link:hover{
            color: white;
            background-color: #2E9AFE;
        }
        .page-link:active{
            color: #2E9AFE;
            background-color: white;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar">
            <li>
                <h1 class="text-center">Hello {{ $dat["user"][0]->name }}</h1>
            </li>
            @if($dat['user'][0]->role=='admin')
            <li><a href='{{route("user")}}'><button> Get Users</button></a></li>
            <li><a href="/regstu"><button>Get Registered students</button></a></li>
            @elseif($dat['user'][0]->role=='executive')
            <li><a href="/regstu"><button> Get Registered students</button></a></li>
            @endif
            <li><a href="/table"><button>Students</button></a></li>
            <li><a href="/logout"><button>Logout</button></a></li>
        </div>
        @yield('content')
    </div>
</body>
<!-- <script>
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


</script> -->

</html>