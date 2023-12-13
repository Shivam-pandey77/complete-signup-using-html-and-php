<?php

    $con = new mysqli('localhost','root','','newtest');

    if(!$con)
    {
        die(mysqli_error($con));
    }
?>