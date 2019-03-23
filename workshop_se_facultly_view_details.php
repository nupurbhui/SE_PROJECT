<?php
session_start();
?>
<html>
	<head>
		<style>
					body {
							background: url("598.jpg");
							background-repeat: no-repeat;
							background-size: 100% 100%;
						}

					ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: rgba(131, 139, 153,0.4);
            }

            li {
                float: left;
            }

            li a {
                display: block;
                color: white;
                text-align: center;
								text-shadow: 2px 0 0 #000, -2px 0 0 #000, 0 2px 0 #000, 0 -2px 0 #000, 1px 1px #000, -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000;
								padding: 14px 16px;
                text-decoration: none;
              }

            li a:hover {
                background-color: #111;
            }
		</style>
	</head>
	<body bgcolor="orange">
		<div>
          <ul>
           <!-- <li><a class="active" href="index.html">Home</a></li>
            <li><a href="#news">Booking</a></li>
            <li><a href="#contact">Hall reviews</a></li>-->
            <li style="float:right"><a href="logout.php">Logout</a></li>
            <li style="float:right"><a href="StudentRegistrationform.php">Student Registration</a></li>
            <li style="float:right"><a href="workshop.php">Workshop Details</a></li>
            <li style="float:right"><a href="check_student.php">Check Student</a></li>
            <li style="float: center"><a><?php echo "Hello ".$_SESSION['uname']." !"?></a></li>
          </ul>
        </div>
        <br><br>
        <center>
            <form action="facultly_view_details.php" method="post">
                <select name="dept">
                    <option value="cse"selected>CSE</option>
                    <option value="ece">ECE</option>
                    <option value="mech">MECH</option>
                    <option value="eee">EEE</option>
                    <option value="it">IT</option>
                    <option value="civil">CIVIL</option>
                    <option value="che">CHE</option>
                    <option value="mba">MBA</option>
                </select>

                <input type="submit" value="submit">
            </form>
            <table border="1">
                <legend style="color:black;font-size: 32px;font-weight: bolder;">DETAILS</legend>
                <br><br>
                <tr style="color:black;font-weight: bold;font-size:15px">
                    <td>Student Name</td>
                    <td>Student Reg No</td>
                    <td>Year</td>
                    <td>Qualification</td>
                    <td>Department</td>
                    <td>DOB</td>
                    <td>Gender</td>
                    <td>Phone No</td>
                    <td>Email Id</td>
                    <td>Permission Taken</td>
                    <td>Event Name</td>
                    <td>Topic</td>
                    <td>Venue</td>
                    <td>Start Date</td>
                    <td>End Date</td>
                    <td>Awards</td>
                </tr>

                <?php
                        $dept=$_POST['dept'];

                      $link = mysqli_connect("localhost","root","");
                      mysqli_select_db($link,"workshop");
                     if($dept=="select")
                      {
                            $quer1 = "SELECT s.fname , s.sid , s.year, s.dept,s.qualif,s.phno,s.permission,s.DOB,s.email,s.gender,w.event_type,w.topic,w.venue,w.start_date,w.end_date,w.awards FROM student_register s, workshop w WHERE s.sid = w.sid";
                     }
                     if($dept=="cse")
                      {
                            $quer1 = "SELECT s.fname , s.sid , s.year, s.dept,s.qualif,s.phno,s.permission,s.DOB,s.email,s.gender,w.event_type,w.topic,w.venue,w.start_date,w.end_date,w.awards from student_register s, workshop w WHERE s.sid = w.sid AND s.dept="."'$dept'";
                      }
                      if($dept=="ece")
                      {
                            $quer1 = "SELECT s.fname , s.sid , s.year, s.dept,s.qualif,s.phno,s.permission,s.DOB,s.email,s.gender,w.event_type,w.topic,w.venue,w.start_date,w.end_date,w.awards from student_register s, workshop w WHERE s.sid = w.sid AND s.dept="."'$dept'";
                      }
                      if($dept=="mech")
                      {
                            $quer1 = "SELECT s.fname , s.sid , s.year, s.dept,s.qualif,s.phno,s.permission,s.DOB,s.email,s.gender,w.event_type,w.topic,w.venue,w.start_date,w.end_date,w.awards from student_register s, workshop w WHERE s.sid = w.sid AND s.dept="."'$dept'";
                      }
                      if($dept=="civil")
                      {
                            $quer1 = "SELECT s.fname , s.sid , s.year, s.dept,s.qualif,s.phno,s.permission,s.DOB,s.email,s.gender,w.event_type,w.topic,w.venue,w.start_date,w.end_date,w.awards from student_register s, workshop w WHERE s.sid = w.sid AND s.dept="."'$dept'";
                      }
                      if($dept=="che")
                      {
                            $quer1 = "SELECT s.fname , s.sid , s.year, s.dept,s.qualif,s.phno,s.permission,s.DOB,s.email,s.gender,w.event_type,w.topic,w.venue,w.start_date,w.end_date,w.awards from student_register s, workshop w WHERE s.sid = w.sid AND s.dept="."'$dept'";
                      }
                      if($dept=="it")
                      {
                            $quer1 = "SELECT s.fname , s.sid , s.year, s.dept,s.qualif,s.phno,s.permission,s.DOB,s.email,s.gender,w.event_type,w.topic,w.venue,w.start_date,w.end_date,w.awards from student_register s, workshop w WHERE s.sid = w.sid AND s.dept="."'$dept'";
                      }
                      if($dept=="eee")
                      {
                            $quer1 = "SELECT s.fname , s.sid , s.year, s.dept,s.qualif,s.phno,s.permission,s.DOB,s.email,s.gender,w.event_type,w.topic,w.venue,w.start_date,w.end_date,w.awards from student_register s, workshop w WHERE s.sid = w.sid AND s.dept="."'$dept'";
                      }
                      if($dept=="mba")
                      {
                            $quer1 = "SELECT s.fname , s.sid , s.year, s.dept,s.qualif,s.phno,s.permission,s.DOB,s.email,s.gender,w.event_type,w.topic,w.venue,w.start_date,w.end_date,w.awards from student_register s, workshop w WHERE s.sid = w.sid AND s.dept="."'$dept'";
                      }

                      $sql = mysqli_query($link,$quer1);
                      $flag=0;
                        while($row = mysqli_fetch_array($sql))
                        {
                            $flag=1;
                            echo "<tr>";
                            echo "<td>".$row['fname']."</td>";
                            echo "<td>".$row['sid']."</td>";
                            echo "<td>".$row['year']."</td>";
                            echo "<td>".$row['qualif']."</td>";
                            echo "<td>".$row['dept']."</td>";
                            echo "<td>".$row['DOB']."</td>";
                            echo "<td>".$row['gender']."</td>";
                            echo "<td>".$row['phno']."</td>";
                            echo "<td>".$row['email']."</td>";
                            echo "<td>".$row['permission']."</td>";
                            echo "<td>".$row['event_type']."</td>";
                            echo "<td>".$row['topic']."</td>";
                            echo "<td>".$row['venue']."</td>";
                            echo "<td>".$row['start_date']."</td>";
                            echo "<td>".$row['end_date']."</td>";
                            echo "<td>".$row['awards']."</td>";
                        echo "</tr>";
                        }

                    if($flag!=1)
                    {

                        echo "0 results";

                    }
                ?>
                </table>
        </center>






    </body>


</html>
