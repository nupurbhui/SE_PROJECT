<?php
	session_start();
?>

<html>
	<head>
		<title>Registration Form</title>
		<style>
		body {
				background: url("598.jpg");
				background-repeat: no-repeat;
				background-size: 100% 100%;
		}
			.first {
			    width:600px;
			    height:600px;
			    background-color: white;
			    position:relative;
			    margin:100px auto;
			    /*
			    margin-left:-300px;
			    margin-top:-350px;
			    top:50%;
			    left:50%;*/
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
            <li><a href="#news">Booking</a></li>-->
 			<li style="float:right"><a href="logout.php">Logout</a></li>
            <li style="float:right"><a href="facultly_view_details.php">View Details</a></li>
            <li style="float:right"><a href="workshop.php">Workshop Details</a></li>
            <li style="float:right"><a href="check_student.php">Check Student</a></li>
            <li style="float: center"><a><?php echo "Hello ".$_SESSION['uname']." !"?></a></li>

          </ul>
        </div>
		<center class="first"><br>
			<h2>STUDENT REGISTRATION FORM</h2><br>
			<form action="StudentRegistrationdb.php" method="post" name="form">
				<b>Student Name:&nbsp&nbsp</b>
					<input type="text" name="fname" placeholder="First name">&nbsp&nbsp
					<input type="text" name="lname" placeholder="Last name"><br><br>
				<b>Student ID:&nbsp&nbsp</b>
					<input type="text" name="sid" placeholder="16331A0546"><br><br>
				<b>Year:&nbsp&nbsp</b>
					<select name="year">
						<option value="select">(-select-)</option>
						<option value="1">1<sup>st</sup></option>
						<option value="2">2<sup>nd</sup></option>
						<option value="3">3<sup>rd</sup></option>
						<option value="4">4<sup>th</sup></option>
					 </select><br><br>
				<b>Department:&nbsp&nbsp</b>
					<select name="department">
						<option value="select">(-select-)</option>
						<option value="cse">CSE</option>
						<option value="ece">ECE</option>
						<option value="mech">MECH</option>
						<option value="eee">EEE</option>
						<option value="it">IT</option>
						<option value="civ">CIVIL</option>
						<option value="che">CHE</option>
						<option value="mba">MBA</option>
				   </select><br><br>
				<b>Qualification:&nbsp&nbsp</b>
					<select name="qualification">
						<option value="select">(-select-)</option>
						<option value="btech">BTECH</option>
						<option value="mtech">MTECH</option>
						<option value="mba">MBA</option>
				   </select><br><br>
				<b>Phone Number:&nbsp&nbsp</b>
					<input type="text" name="pno"><br><br>
				<b>DOB:&nbsp&nbsp</b>
					<input type="date" name="dob"><br><br>
				<b>Email-ID:&nbsp&nbsp</b>
					<input type="email" name="smail" placeholder="abc@gmail.com"><br><br>
				<b>Gender:&nbsp&nbsp</b>
				  	<input type="radio" name="gender" value="male" checked> Male
					<input type="radio" name="gender" value="female"> Female
					<input type="radio" name="gender" value="other"> Other<br><br>
				<b>I had taken prior permission from the councillor and HOD:</b><br>
					<input type="radio" name="permission" value="yes" checked>Yes
					<input type="radio" name="permission" value="no">No<br><br>
			 	<b>Did you recieve any funds from the college:</b>
					<input type="radio" name="fund" value="yes">Yes
			  		<input type="radio" name="fund" value="no" checked>No<br><br>
					<input type="submit" value="Submit" onclick="return validation()">
					<input type="reset" value="Cancel">
			</form>
		</center>

		<script language="Javascript">
            function validation()
            {
		         var jfname = document.form.fname.value;
		          var jlname = document.form.lname.value;
		          var jsid = document.form.sid.value;
		          var jyear = document.form.year.value;
		          var jdepartment = document.form.department.value;
		          var jqualification = document.form.qualification.value;
		          var jdob = document.form.dob.value;
		          var jsmail = document.form.smail.value;
		          var jpno = document.form.pno.value;


		          if(jfname.length==0)
		          {
		            window.alert("First name is empty");
		            return false;
		          }
		          else if(/^[A-z ]+$/.test(jfname)==false)
		          {
		        	  	window.alert("Enter valid first name");
		                return false;
		          }
		          else if(jfname.length <= 2)
		          {
		                window.alert("First Name is too short (minimum of 3 characters)");
		                return false;
		           }
		          else if(jlname=="")
		          {
		            window.alert("Last name is empty");
		            return false;
		          }
		          else if(/^[A-z ]+$/.test(jlname)==false)
		          {
		        	  	window.alert("Enter valid Last name");
		                return false;
		          }
		          else if(jlname.length <= 2)
		          {
		                window.alert("Last Name is too short (minimum of 3 characters)");
		                return false;
		           }
		          else if(jsid==""||jsid.length!=10||/^[0-9 A]+$/.test(jsid)==false)
		          {
		            	window.alert("Enter valid sid with 10 digits");
		            	return false;
		          }

		          else if(jyear=="select")
		          {
		                window.alert("Select valid year");
		                return false;
		          }
		          else if(jdepartment=="select")
		          {
		                window.alert("Select valid department");
		                return false;
		          }
		          else if(jqualification=="select")
		          {
		                window.alert("Select valid qualification");
		                return false;
		          }
		          else if(jpno==""||jpno.length!=10||/^[0-9]+$/.test(jpno)==false)
		          {
		            	window.alert("Enter valid phone number with 10 digits");
		            	return false;
		          }
		          else if(jdob=="")
		          {
		          	window.alert("Enter valid DOB");
		          	return false;
		          }
		          else if(jsmail=="")
		          {
		          	window.alert("Enter valid email");
		          }


		          return true;

		    }
    	</script>
	</body>
</html>
