<?php
session_start();
$uname = $_SESSION['uname'];
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
	<body>
		<div>
          <ul>
           <!-- <li><a class="active" href="index.html">Home</a></li>
            <li><a href="#news">Booking</a></li>
            <li><a href="#contact">Hall reviews</a></li>-->
						<li style="float:right"><a href="logout.php">Logout</a></li>
            <li style="float: center"><a><?php echo "Hello ".$_SESSION['uname']." !"?></a></li>
          </ul>
        </div>
        <br><br>
		<center>
			<table border="1" style="font-size: 20px;color:blue">
				<legend style="color:white;text-shadow: 2px 0 0 #000, -2px 0 0 #000, 0 2px 0 #000, 0 -2px 0 #000, 1px 1px #000, -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000;
				font-size: 32px;font-weight: bolder;"><?php echo "Hello ".$_SESSION['uname']." !"?></legend>
				<br><br>
				<tr style="color:black;font-weight: bold;font-size:25px">
					<td>Event Name</td>
					<td>Topic</td>
					<td>Venue</td>
					<td>Start Date</td>
					<td>End Date</td>
					<td>Awards</td>
				</tr>

				<?php
          			  $link = mysqli_connect("localhost");
          			  mysqli_select_db($link,"workshop");
                      $quer1 = "SELECT * FROM workshop where sid="."'$uname'";
                      $sql = mysqli_query($link,$quer1);
					  $flag=0;
						while($row = mysqli_fetch_array($sql))
						{
             	 			$flag=1;
          					echo "<tr>";
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
						echo "<h4>";
						echo "0 results";
						echo "</h4>";
					}
  				?>
                </table>
		</center>






	</body>


</html>
