<?php
	session_start();
?>
<html>
	<head>
		<title>Workshops</title>
		<style>
			body {
					background: url("598.jpg");
					background-repeat: no-repeat;
					background-size: 100% 100%;
			}

			.first {
			    width:600px;
			    height:440px;
			    background-color: white;
			    position:relative;
			    margin:150px auto;
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
								text-shadow: 2px 0 0 #000, -2px 0 0 #000, 0 2px 0 #000, 0 -2px 0 #000, 1px 1px #000, -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000;
								text-align: center;
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
            <li style="float:right"><a href="facultly_view_details.php">View Details</a></li>
            <li style="float:right"><a href="StudentRegistrationForm.php">Student Registration</a></li>
            <li style="float:right"><a href="check_student.php">Check Student</a></li>
            <li style="float: center"><a><?php echo "Hello ".$_SESSION['uname']." !"?></a></li>
          </ul>
        </div>
		<center><span id="error"></span></center>
		<center class="first"><br>
			<h2>WORKSHOPS FORM</h2><br>
			<form action="workshopdb.php" method="post" name="form">
				<b>Student Reg No:&nbsp&nbsp</b>
					<input type="text" name="sid" placeholder="16331A0551"><br><br>
				<b>Event Type:&nbsp&nbsp</b>
					<input type="text" name="event_type" placeholder="Workshop / Paper Presentation" size='30'><br><br>
				<b>Topic:&nbsp&nbsp</b>
					<input type="text" name="topic" placeholder="Android workshop"><br><br>
				<b>Venue:&nbsp&nbsp</b>
					<input type="text" name="venue" placeholder="Venue"><br><br>
				<b>Start Date:&nbsp&nbsp</b>
					<input type="date" name="sdate"><br><br>
				<b>End Date:&nbsp&nbsp</b>
					<input type="date" name="edate"><br><br>
				<b>Awards:&nbsp&nbsp</b>
					<select name="awards">
						<option value='None'>None</option>
						<option value="First">First</option>
						<option value="Second">Second</option>
						<option value="Third">Third</option>
					</select><br><br>
				<input type="submit" value="Submit" onclick="return validation()">&nbsp&nbsp
				<input type="reset" value="Cancel">
			</form>
		</center>
		<script language="Javascript">
            function validation()
            {
		         var jsid = document.form.sid.value;
		          var jevent_type = document.form.event_type.value;
		          var jtopic = document.form.topic.value;
		          var jvenue = document.form.venue.value;
		          var jsdate = document.form.sdate.value;
		          var jedate = document.form.edate.value;


		          if(jsid==""||jsid.length!=10||/^[0-9 A]+$/.test(jsid)==false)
		          {
		            	window.alert("Enter valid sid with 10 digits");
		            	return false;
		          }
		          else if(jevent_type.length==0)
		          {
		            window.alert("Event type box is empty");
		            return false;
		          }
		          else if(/^[A-z ]+$/.test(jevent_type)==false)
		          {
		        	  	window.alert("Enter valid event type");
		                return false;
		          }
		          else if(jtopic=="")
		          {
		            window.alert("Topic box is empty");
		            return false;
		          }
		          else if(/^[A-z ]+$/.test(jtopic)==false)
		          {
		        	  	window.alert("Enter valid Topic");
		                return false;
		          }
		          else if(jvenue=="")
		          {
		            window.alert("Venue box is empty");
		            return false;
		          }
		          else if(/^[A-z ]+$/.test(jvenue)==false)
		          {
		        	  	window.alert("Enter valid Venue");
		                return false;
		          }

		          else if(jsdate=="")
		          {
		                window.alert("Select start date");
		                return false;
		          }
		          else if(jedate=="select")
		          {
		                window.alert("Select end date");
		                return false;
		          }
		          else if(jsdate>jedate)
		          {
		                window.alert("Start date and End date combination is wrong");
		                return false;
		          }

		          return true;

		    }
    	</script>
	</body>
</html>
