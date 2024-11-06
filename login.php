<?php
    session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
    <div class="container"><br>
        <div class="row">
            <div class="col-md-6 bg-light ">
                <h5>Login</h5>
                <form class="form-group" action="login_check.php" method="post">
                    <input type="text" name="username" id="" class="form-control" placeholder="username" required> <br>
                    <input type="password" name="password" id="" class="form-control" placeholder="password" required> <br>

                    <?php
                        if(isset($_SESSION['error'])){
                            echo    "<div class='text-danger'> ";
                            echo $_SESSION['error'];
                            SESSION_destroy(); //ลบคำสั่ง session
                            
                            echo "</div>";
                        }
                    ?>
                    <input type="submit" value="login" name="" id="" class="btn btn-primary">
                    <a class="btn btn-warning" href="register.php">Register</a>
                </form>
            </div>
        </div>

    </div>
</body>

    </html>