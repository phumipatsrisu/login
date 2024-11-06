<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 bg-light ">

        <form class="form-group" action="insert.php" method="post">
          <br>
          <h1 class="alert alert-primary" role="alert">สมัครสมาชิก</h1> <br>
          ชื่อ: <input class="form-control" type="text" name="name" id="" placeholder="ชื่อจริง" required>

          นามสกุล: <input class="form-control" type="text" name="lastname" id="" placeholder="นามสกุล" required>

          เบอร์โทร: <input class="form-control" type="number" name="phone" id="" placeholder="เบอร์โทร" maxlength="10" required>

          Username: <input class="form-control" type="text" name="username" id="" placeholder="username" required>

          Password: <input class="form-control" type="password" name="password" id="" placeholder="password" required> <br>

          <input class="btn btn-success" type="submit" name="" id="" value="บันทึก">
          <input type="reset" name="" id="" class="btn btn-warning" value="รีเซ็ท">
          <br><br>
          <a class="btn btn-primary" role="alert" h4" href="login.php">Login</a>

        </form>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>