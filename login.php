<?php

    if($_SERVER['REQUEST_METHOD']='POST')
    {
        include 'connect.php';

        $pass=$_POST['password'];
        $dob=$_POST['dob'];
        $email=$_POST['email'];

        $sql= "select * from `data` where password='$pass' AND dob= '$dob' AND email= '$email'";

        $res= mysqli_query($con,$sql);

        if($res)
        {
            $count = mysqli_num_rows($res);

            if($count>0)
            {
            header('location:logout.html');
            }
            else
            {
                header('location:wrong.html');
                
            }
        }
    }

?>
