<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        .m {
            margin: 1%;
        }

        .p {
            padding: 1%;
        }

        .form-group,
        .form-control,
        .btn {
            font-size: 2vmin;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="jumbotron text-center">
            <h1>Fill the form properly</h1>
        </div>
        <form action="" method="post">
            <div class="input-group">
                <div class="form-group m p col-5">
                    <input type="text" class="form-control" name="fullName" id="fullName" placeholder="Enter Full Name" required>
                </div>
                <div class="form-group m p col-5">
                    <input type="number" class="form-control" name="urn" id="urn" placeholder="Enter University Roll Number" min="1" required>
                </div>
            </div>
            <div class="input-group">
                <div class="form-group m p col-5">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email ID" required>
                </div>
                <div class="form-group m p col-5">
                    <input type="tel" class="form-control" name="mobile" id="mobile" placeholder="Enter Mobile Number" required>
                </div>
            </div>
            <div class="form-group">
                <label for="branch" class="col-5 m p">Select Branch:</label>
                <select name="branch" id="branch" class="col-5 m p">
                    <option value="Applied Science">Applied Science</option>
                    <option value="Civil Engineering">Civil Engineering</option>
                    <option value="Electrical Engineering">Electrical Engineering</option>
                    <option value="Mechanical Engineering">Mechanical Engineering</option>
                    <option value="Electronics & Communication Engineering">Electronics & Communication Engineering</option>
                    <option value="Computer Science & Engineering">Computer Science & Engineering</option>
                    <option value="Information Technology">Information Technology</option>
                    <option value="Production Engineering">Production Engineering</option>
                </select>
            </div>
            <div class="form-group input-group">
                <label for="company" class="col-5 m p">Selecy Company:</label>
                <select name="company" id="comapny" class="col-5 m p">
                    <option value="Company1">Company 1</option>
                </select>
            </div>
            <center>
                <div class="form-group m p">
                    <input type="submit" value="Submit" class="btn btn-primary">
                </div>
            </center>
        </form>
    </div>
</body>

</html>