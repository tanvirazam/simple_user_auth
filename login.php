<?php
session_start();

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

$role = [];
$emails = [];
$passwords = [];
$errorMessage = " ";

//file open
$fb = fopen("./data/use.txt", "r");
while ($data = fgets($fb)) {
    echo $data;
    $line = explode(",", $data);
    array_push($role, trim($line[0]));
    array_push($emails, trim($line[1]));
    array_push($passwords, trim($line[2]));
}

for ($i = 0; $i < count($role); $i++) {
    if ($email == $emails[$i] && $password == $passwords[$i]) {
        header("location:project.php");
        $_SESSION["role"] = $role[$i];
        $_SESSION["email"] = $emails[$i];
    } elseif ($email == '' && $password == '') {
        $errorMessage = "invalid email pass";
    } else {
        $errorMessage = "Invalid rules";
    }
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
            <form action="login.php" method="POST">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
                </div>
                <h2 class="text-danger"><?php echo $errorMessage ?></h2>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">password</label>
                    <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="Password">

                </div>
                <div class="mb-3 form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">Remember me </label>
                </div>
                <h2 class="text-danger">
                    <?php
                    echo $errorMessage;
                    ?>
                </h2>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">submit</button>
                </div>
                <a href="signup.php">Don't have an account..?</a>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>