<?php
	require "connection.php";

	session_start();
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$sid = $_POST['sid'];
	$year = $_POST['year'];
	$dept = $_POST['department'];
	$qualif = $_POST['qualification'];
	$pno = $_POST['pno'];
	$dob = $_POST['dob'];
	$mail = $_POST['smail'];
	$gender = $_POST['gender'];
	$permission = $_POST['permission'];

	$_SESSION['sid'] = $sid;
/*	$link = mysqli_connect("localhost");


     if(!$link)
    {
        echo "connection not established";
    }
    else
    {
        echo "connection established";
    }


    mysqli_select_db($link,"workshop");
    $query = "CREATE TABLE student_register (fname VARCHAR(20), lname VARCHAR(20), sid VARCHAR(10) PRIMARY KEY, year INT(3),dept VARCHAR(10), qualif VARCHAR(20),phno BIGINT(10), DOB date,email VARCHAR(30),gender VARCHAR(10),permission VARCHAR(10))";
    if (!mysqli_query($link,$query)) {
                echo "<br>failed to create table";
    }
    else{
        echo "<br>table created";
    }
*/

    //mysqli_select_db($link,"workshop");


    $result = $conn->query("INSERT INTO student_register VALUES('$fname','$lname','$sid',$year,'$dept','$qualif',$pno,'$dob','$mail','$gender','$permission')");
  
        if (!$result)
        {
            echo "Not inserted";
            echo '
                    <html>
                        <head>
                            <script>
                                    var a = window.confirm("Details with this registraion number is already present so enter workshop details");
                                    if(a==true){
                                        window.location = "workshop.php";
                                    }
                                    else{
                                        window.location = "StudentRegistrationForm.php";
                                    }

                            </script>
                        </head>
                    </html>
                    ';
        }
        else
        {
            echo "inserted";
            header('Location:workshop.php');
        }
?>
