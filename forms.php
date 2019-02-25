<?php
//array $_post
if(isset($_POST["submit"]))
{
//   $first = $_POST["first"] ;
//   $second =$_POST["second"];
   extract($_POST);
   $result = $first + $second;


}


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculate</title>
    <link rel="stylesheet" href="bootstrap-4.2/css/bootstrap.css">
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-4">
            <form action="forms.php" method="post">
                <div class="form-group">
                  <input  type="number" name="first" step="any" max="1000"
                </div>
                <div class="form-group">

                    <input type="number"  name="second" step="any" max="1000"
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input c-lass="form-check-input" type="checkbox">
                    </label>
                </div>
                <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
            <?php
            if (isset($result))
            {
                echo "<p class='text-center text-danger'>The Answer is $result";
            }
            ?>

        </div>

    </div>
</div>




</body>
</html>