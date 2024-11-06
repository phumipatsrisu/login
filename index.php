    <?php //โค้ดป้องกันการพิมพ์ index ที่ url โดยตรง บังคับว่าต้องล็อคอินก่อน
    session_start();
    if (!isset($_SESSION['username'])) {
        header("location:login.php");
    }


    ?>



    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>index</title>
    </head>

    <body>
        <div class="container"> <br>
            <div class="alert alert-info">
                Welcome
            </div>
            <?php // แสดงข้อมูลผู้ใช้เมื่อเข้าสู่ระบบได้
            if (isset($_SESSION['name'])) {
                echo    "<div class='text-success '> ";
                echo $_SESSION['name'] . " " . $_SESSION['lastname'];
                echo "</div>";
            }
            ?>
        </div>
        <a href="logout.php">Logout</a>

    </body>

    </html>