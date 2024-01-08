<?php 
include(dirname(__DIR__)."/utils/db.php");

    $username=strtolower($_POST["username"]);
    $email=strtolower($_POST["email"]);
    $password=$_POST["password"];
    $sql_QUery="INSERT INTO USER SET username='".$username."',email='".$email."',password='".$password."'";

    $query=mysqli_query($db_conn,$sql_QUery);
    header("Location:http://localhost:8888");



