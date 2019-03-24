<?php
  require "connection.php";

  session_start();
  $id = $_POST['sid'];
	$type = $_POST['event_type'];
	$topic = $_POST['topic'];
	$venue = $_POST['venue'];
	$sdate = $_POST['sdate'];
	$edate = $_POST['edate'];
	$awards = $_POST['awards'];


/*
    echo $awards;
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
    $query = "CREATE TABLE workshop (sid VARCHAR(10), event_type VARCHAR(30), topic VARCHAR(50), venue VARCHAR(50), start_date date,end_date date,awards VARCHAR(10))";
    $sql = "ALTER TABLE workshop ADD FOREIGN KEY(sid) REFERENCES student_register(sid)";
    if (!mysqli_query($link,$query)) {
                echo "<br>failed to create table";
    }
    else{
        echo "<br>table created";
    }


    mysqli_select_db($link,"workshop");
*/

    $result = $conn->query("INSERT INTO workshop VALUES('$id','$type','$topic','$venue','$sdate','$edate','$awards')");
        if (!$result)
        {
            echo '
                    <html>
                        <head>
                            <script>
                                    var a = window.confirm("Student Not registered yet. First register the student");
                                    if(a==true){
                                        window.location = "StudentRegistrationForm.php";
                                    }
                                    else{
                                        window.location = "workshop.php";
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
