
<?php
if (isset($_POST["dob"]))
{
    extract($_POST);
//    echo "$names $dob $scholarship $course";
//connect
    $scholarship = isset($scholarship) ? "yes" : "No";
    $conn = mysqli_connect("localhost", "root", "", "shule");
    $sql ="INSERT INTO `students`(`id`, `names`, `school_id`, `gender`, `scholarship`, `email`, `course`, `dob`) VALUES 
                                 (NULL,'$names','$school_id','$gender','$scholarship','$email','$course','$dob')";
    mysqli_query($conn, $sql) or die(mysqli_error($conn) );

    $message = "student $names has been registered";
}
?>

<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="bootstrap-4.2/css/bootstrap.css">
</head>
<body>
    <div class="container">
      <div class="row justify-content-center">
          <div class="col-sm-5">
              <h3>Register student</h3>
              <p class="text_success">
                  <?php
                  if (isset($message))
                      echo $message;
                  ?>


                  </p>
              <form action="register.php" method="post">

                  <div class="form-group">
                      <input type="text"required class="form-control" name="names"placeholder="Names">
                  </div>
                  <div class="form-group">
                      <input type="text" required class="form-control" name="school_id"placeholder="school id">
                  </div>
                  <div class="form-group">
                  <input type="email" required class="form-control" name="email"placeholder="email">
                  </div>
                  <div class="form-group">
                      <input type="date" required class="form-control" name="dob" placeholder="Date of birth">
                  </div>
                  <div class="radio">
                      <label><input type="radio" checked value="Female" name="Gender"> Female</label>
                  </div>
                  <div class="radio">
                      <label><input type="radio"value="Male" name="Gender"> Male</label>
                  </div>
                  <div class="form-group">

                      <select name="caurse" class="form-control">


                          <option value="Medicine">Medicine</option>
                          <option value="Engineer">Engineer</option>
                          <option value="Pharmarcy">Pharmarcy</option>
                          <option value="Pilot">Pilot</option>
                          <option value="Teacher">Teacher</option>
                      </select>


                  </div>

                  <div class="form-check">
                      <input class="form-check-input"name="scholarship" value="yes" type="checkbox"> scholarship?
                      <label class="form-check-label">
                  </label>
                  </div>
                  <button type="submit" class="btn btn-primary btn-block">Submit</button>
              </form>

          </div>
      </div>

    </div>
</body>
</html>