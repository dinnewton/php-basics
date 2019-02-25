<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fetch</title>
    <link rel="stylesheet" href="bootstrap-4.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <script src="bootstrap-4.2/js/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

</head>
<body>

<?php
require 'navbar.php';


?>
<div class="container">







    <table class="table table-success" id="employees">
        <thead>
        <tr>
            <th>id</th>
            <th>names</th>
            <th>email</th>
            <th>gender</th>
            <th>dob</th>
            <th>deparment</th>
            <th>salary</th>
            <th>adress</th>
            <th>kra_pin</th>
            <th>Action</th>
            <tbody>



<!---->
<!--<tr>-->
<!--    <td>1</td>-->
<!--    <td>kiragu</td>-->
<!--    <td>kiragu @gmail.com</td>-->
<!--    <td>male</td>-->
<!--    <td>12/3/2019</td>-->
<!--    <td>fire</td>-->
<!--    <td>65432</td>-->
<!--    <td>876 kikuyu</td>-->
<!--    <td>4363744</td>-->
<!---->
<!--</tr>-->
        <?php

        $conn = mysqli_connect("localhost", "root", "", "Employees_Inc");
        $sql = "select * from employees";
         $results = mysqli_query($conn, $sql);

         while ( $row = mysqli_fetch_assoc($results))
         {

//         var_dump($row);
//         die();
             extract($row);
          echo " <tr>
    <td>$id</td>
    <td>$names</td>
    <td>$email</td>
    <td>$gender</td>
    <td>$dob</td>
    <td>$deparment</td>
    <td>$kra_pin</td>
    <td>$adress</td>
    <td>$salary</td>
     <td><a class='btn-danger btn-sm' href='delete.php?id=$id'>Remove</a> </td>
</tr>";

         }


        ?>
        </tbody>
        <th></th>
    </tr>
        </thead>
    </table>
</div>

<script>

    $(document).ready(function() {
        $('#employees').DataTable();
    } );


</script>



</body>
</html>