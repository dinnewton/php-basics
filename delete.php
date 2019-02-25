<?php
//GET
//github.com
if (isset($_GET["id"]))
{
    $conn = mysqli_connect("localhost", "root", "", "Employees_Inc");
    extract($_GET);
    $sql ="delete from employees where  id=$id";
    mysqli_query($conn, $sql);

}
header("location:fetch.php");
