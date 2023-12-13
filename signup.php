<?php

    include 'connect.php';
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $name= $_POST['name'];
        $email= $_POST['email'];
        $pass= $_POST['password'];
        $dob= $_POST['dob'];
        $gender= $_POST['gender'];

        $sql = "insert into `data`(name,email,password,dob,gender) values('$name','$email','$pass','$dob','$gender')";

        $res = mysqli_query($con,$sql);

        if($res)
        {
            header('location:index.html');
            exit;
        }
        else
        {
            die(mysqli_error($con));
        }
    }

?>