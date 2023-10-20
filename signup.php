<?php
$email = $_POST["email"] ?? '';
$password = $_POST["password"] ?? '';
$firstname = $_POST["firstname"] ?? '';
$lastname = $_POST["lastname"] ?? '';
$age = $_POST["age"] ?? '';

$role = "user";
echo $age;

if ($email != "" && $password != "") {
    //  $name=file_put_contents("./data/use.txt",  "\n{$role}, {$email}, {$password}, {$firstname}, {$lastname}, {$age}");

    $fb = fopen("./data/use.txt", "a");
    fwrite($fb, "\n{$role}, {$email}, {$password}, {$firstname}, {$lastname}, {$age}");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1 class="fs-5 text-secondary text-center">Login Account!</h1>
    <div class="container">
        <div class="row ">
            <form action="signup.php" method="POST">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
                </div>
                <h2 class="text-danger">

                </h2>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">password</label>
                    <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="Password">

                </div>
                <div class="mb-3 form-check">
                    <label for="exampleFormControlTextarea1" class="form-label">firstname</label>
                    <input type="text" name="firstname" class="form-control" id="exampleFormControlInput1" placeholder="firstname">
                </div>
                <div class="mb-3 form-check">
                    <label for="exampleFormControlTextarea1" class="form-label">lastname</label>
                    <input type="text" name="lastname" class="form-control" id="exampleFormControlInput1" placeholder="lastname">
                </div>
                <div class="mb-3 form-check">
                    <label for="exampleFormControlTextarea1" class="form-label">Age</label>
                    <input type="number" name="age" class="form-control" id="exampleFormControlInput1" placeholder="number">
                </div>
                <h2 class="text-danger">

                </h2>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">submit</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>