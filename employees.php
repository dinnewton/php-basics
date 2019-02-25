<?php
if (isset($_POST["dob"]))
{
    extract($_POST);
    $conn = mysqli_connect("localhost", "root", "", "Employees_Inc");
    $sql = "INSERT INTO `employees`(`id`, `names`, `email`, `adress`, `dob`, `gender`, `kra_pin`, `salary`, `deparment`) VALUES 
                                    (NULL,'$names','$email','$adress','$gender','$dob','$kra_pin','$salary','$deparment')";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));

    $message = "student $names has been registered";
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>employees</title>
    <link rel="stylesheet" href="bootstrap-4.2/css/bootstrap.css">
</head>
<body>
<?php
require 'navbar.php';
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-4">

            </p>
            <form action="employees.php" method="post">


                <div class="form-group">
                    <input type="text" required class="form-control" name="names" placeholder="names">
                </div>
                <div class="form-group">
                    <input type="email" required class="form-control" name="email" placeholder="email">
                </div>
                <div class="form-group">
                    <input type="text" required class="form-control" name="adress" placeholder="adress">
                </div>
                <div class="form-group">
                    <input type="date" required class="form-control" name="dob" placeholder="Date of birth">
                </div>
                <div class="form-group">

                    <select name="deparment" class="form-control">


                        <option value="fire">fire</option>
                        <option value="transport">transport</option>
                        <option value="management">management</option>
                        <option value="housing">housing</option>
                        <option value="water">water</option>
                    </select>


                </div>

                <div class="radio">
                    <label><input type="radio" value="Female" name="gender"> Female</label>
                </div>
                <div class="radio">
                    <label><input type="radio" value="Male" name="gender"> Male</label>
                </div>
                <div class="form-group">
                    <input type="text" required class="form-control" name="kra_pin" placeholder="kra_pin">
                </div>
                <div class="form-group">
                    <input type="text" required class="form-control" name="salary" placeholder="salary">
                </div>

                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
        </div>
        <!--          end of col-->
    </div>
    <!--      end of row-->
</div>

</body>
</html>















