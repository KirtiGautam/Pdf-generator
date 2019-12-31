<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        body {
            background: url("https://backgrounddownload.com/wp-content/uploads/2018/09/sky-blue-flower-background-wallpaper-8.jpg") no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        h1{
            font-size:8vmin;
        }

        .p {
            padding: 1vmin;
        }

        .form-group,
        .form-control{
            font-size: 3vmin;
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
            border-radius: 25px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="jumbotron text-center">
            <h1>Training Form</h1>
        </div>
        <div class="row">
            <div class="btn-group col-lg-12" role="group">
                <a href="{{ route('login') }}" type="button" class="btn btn-primary">Login</a>
                <a href="{{ route('register') }}" type="button" class="btn btn-dark">Register</a>
            </div>
        </div>
        <form method="post" class="form" action="{{ route('training-form') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="input-group col-lg-12 col-sm-12 col-md-12 col-xs-12 p">
                <div class="form-group col-lg-6">
                    <input type="text" class="form-control" name="name" id="fullName" placeholder="Enter Full Name" required>
                </div>
                <div class="form-group col-lg-6">
                    <input type="number" class="form-control" name="roll" id="urn" placeholder="Enter University Roll Number" min="1" required>
                </div>
            </div>
            <div class="input-group col-lg-12 col-sm-12 col-md-12 col-xs-12 p">
                <div class="form-group col-lg-6 ">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email ID" required>
                </div>
                <div class="form-group col-lg-6 ">
                    <input type="tel" class="form-control" name="tel" id="mobile" placeholder="Enter Mobile Number" required>
                </div>
            </div>

            <div class="form-group input-group col-lg-12 col-sm-12 col-md-12 col-xs-12 p">
                <label for="branch" class="col-lg-6 ">Select Branch:</label>
                <select name="branch" id="branch" class="form-control" required>
                    <option value="Civil Engineering">Civil Engineering</option>
                    <option value="Electrical Engineering">Electrical Engineering</option>
                    <option value="Mechanical Engineering">Mechanical Engineering</option>
                    <option value="Electronics & Communication Engineering">Electronics & Communication Engineering</option>
                    <option value="Computer Science & Engineering">Computer Science & Engineering</option>
                    <option value="Information Technology">Information Technology</option>
                    <option value="Production Engineering">Production Engineering</option>
                </select>
            </div>
            <div class="form-group input-group col-lg-12 col-sm-12 col-md-12 col-xs-12 p">
                <label for="company" class="col-lg-6">Selecy Company:</label>
                <select name="company" id="comapny" class="form-control" required>
                    <option value="" disabled selected>Select Company </option>
                    @foreach($resp['company'] as $com)
                    <option value="{{ $com->company_name }}">{{ $com->company_name }}</option>
                    @endforeach
                </select>
            </div>
            <center>
                <div class="form-group m p" id='subtn'>
                    <input type="submit" value="Submit" class="btn btn-primary" name="subtn">
                </div>
                <div class="form-group m p" id='modbtn'>
                    <input type="submit" value="Modify" class="btn btn-primary" name="modbtn">
                </div>
            </center>
        </form>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    var pausecontent = new Array();
    @foreach($resp['urns'] as $urn)
    pausecontent.push('{{ $urn->urn }}');
    @endforeach
    $('#modbtn').hide();
    //setup before functions
    let typingTimer; //timer identifier
    let doneTypingInterval = 5000; //time in ms (5 seconds)
    let myInput = document.getElementById('urn');

    //on keyup, start the countdown
    myInput.addEventListener('keyup', () => {
        clearTimeout(typingTimer);
        if (myInput.value) {
            typingTimer = setTimeout(doneTyping, doneTypingInterval);
        }
    });

    //user is "finished typing," check if value exist
    function doneTyping() {
        if (pausecontent.indexOf(document.getElementById('urn').value) != -1) {
            $("#modbtn").show();
            $("#subtn").hide();
        } else {
            $("#subtn").show();
            $("#modbtn").hide();
        }
    }
</script>

</html>