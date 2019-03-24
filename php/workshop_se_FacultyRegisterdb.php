<?php

	require "connection.php";

	session_start();
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$fid = $_POST['fid'];
	$dept = $_POST['department'];
	$qualif = $_POST['qualification'];
	$desig = $_POST['designation'];
	$pno = $_POST['pno'];
	$pwd = $_POST['psswd'];
	$email = $_POST['eid'];

/*
	$link = mysqli_connect("localhost");


     if(!$link)
    {
        echo "connection not established";
    }
    else
    {
        echo "connection established";
    }

   $sql = "CREATE DATABASE workshop";
    if (!mysqli_query($link,$sql)) {
        echo "<br>Error creating database ";
    } else {
        echo "<br>Created database successfully";
    }

    mysqli_select_db($link,"workshop");
    $query = "CREATE TABLE factulty_register (fname VARCHAR(20), lname VARCHAR(20), fid VARCHAR(10) PRIMARY KEY, dept VARCHAR(10), qualif VARCHAR(20),desig VARCHAR(30),phno BIGINT(10), password VARCHAR(20),email VARCHAR(30))";
    if (!mysqli_query($link,$query)) {
                echo "<br>failed to create table";
    }
    else{
        echo "<br>table created";
    }
*/


    $result = $conn->query( "INSERT INTO factulty_register VALUES('$fname','$lname','$fid','$dept','$qualif','$desig',$pno,'$pwd','$email')");

        if (!$result)
        {
            echo '
                    <html>
                        <head>
                            <script>
                                    var a = window.confirm("Details with this faculty number is already present so directly login");
                                    if(a==true){
                                        window.location = "login.php";
                                    }
                                    else{
                                        window.location = "homep.php";
                                    }

                            </script>
                        </head>
                    </html>
                    ';
        }
        else
        {
            echo "inserted";
            header('Location:login.php');
        }






?>
