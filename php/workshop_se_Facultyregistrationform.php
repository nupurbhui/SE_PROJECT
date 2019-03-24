<html>
	<head>
		<title>Faculty Registration Form</title>
		<style>
			body {
					background: url("598.jpg");
					background-repeat: no-repeat;
					background-size: 100% 100%;
				}

			.first {
			    width:600px;
			    height:530px;
			    background-color: white;
			    position:relative;
			    margin:100px auto;

			   /* margin-left:-300px;
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
<body bgcolor="orange">
	<div>
          <ul>
           <!-- <li><a class="active" href="index.html">Home</a></li>
            <li><a href="#news">Booking</a></li>
            <li><a href="#contact">Hall reviews</a></li>-->
            <li style="float:right"><a href="login.php">Login</a></li>
            <li style="float: center"><a href="homep.html">Home</a></li>
          </ul>
        </div>
	<center class="first"><br>
		<h2>FACULTY REGISTRATION FORM</h2><br>
		<form action="FacultyRegisterdb.php" method="post" name="form">
			<b>Faculty Name:&nbsp&nbsp</b>
				<input type="text" name="fname" placeholder="First name">&nbsp&nbsp
				<input type="text" name="lname" placeholder="Last name"><br><br>
			<b>Faculty ID:&nbsp&nbsp</b>
				<input type="text" name="fid" placeholder="16331A0546"><br><br>
			<b>Department:&nbsp&nbsp</b>
				<select name="department">
					<option value="select">(-select-)</option>
					<option value="cse">CSE</option>
					<option value="ece">ECE</option>
					<option value="mech">MECH</option>
					<option value="eee">EEE</option>
					<option value="it">IT</option>
					<option value="civil">CIVIL</option>
					<option value="che">CHE</option>
					<option value="mba">MBA</option>
				</select><br><br>
			<b>Qualification:&nbsp&nbsp</b>
				<select name="qualification">
					<option value="select">(-select-)</option>
					<option value="btech">BTECH</option>
					<option value="mtech">MTECH</option>
					<option value="phd">phd</option>
			    </select><br><br>
			<b>Designation:: &nbsp&nbsp</b>
				<select name="designation">
					<option value="select">(-select-)</option>
					<option value="Assistant Professor">Assistant Professor</option>
					<option value="Senior Assistant Professor">Senior Assistant Professor</option>
					<option value="Associate Professor">Associate Professor</option>
					<option value="Professor">Professor</option>
				</select><br><br>
			<b>Phone Number:&nbsp&nbsp</b>
				<input type="tel" name="pno" placeholder="phone number"><br><br>

			<b>Create Password:&nbsp&nbsp</b>
				<input type="password
				" name="psswd" placeholder="password"><br><br>
			<b>Confirm Password:&nbsp&nbsp</b>
				<input type="password" name="cnfpsswd" placeholder="password"><br><br>
			<b>Email-ID:&nbsp&nbsp</b>
				<input type="email" name="eid" placeholder="abc@gmail.com"><br><br><br>
			<input type="submit" value="Submit" onclick="return validation()">
			<input type="reset" value="Cancel">
		</form>
	</center>
			<script language="Javascript">
            function validation()
            {
		         var jfname = document.form.fname.value;
		          var jlname = document.form.lname.value;
		          var jfid = document.form.fid.value;
		          var jdepartment = document.form.department.value;
		          var jqualification = document.form.qualification.value;
		          var jdesignation = document.form.designation.value;
		          var jpno = document.form.pno.value;
		          var jpsswd = document.form.psswd.value;
		          var jcnfpsswd = document.form.cnfpsswd.value;
		          var jeid = document.form.eid.value;


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
		          else if(jfid==""||jfid.length!=10||/^[0-9 A]+$/.test(jfid)==false)
		          {
		            	window.alert("Enter valid sid with 10 digits");
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

		          else if(jdesignation=="select")
		          {
		                window.alert("Select valid designation");
		                return false;
		          }
		          else if(jpno==""||jpno.length!=10||/^[0-9]+$/.test(jsid)==false)
		          {
		            	window.alert("Enter valid phone number with 10 digits");
		            	return false;
		          }
		          else if(jpsswd.length==0)
		          {
		          	window.alert("Password is empty");
		          	return false;
		          }
		          else if(/^[0-9A-z @_]+$/.test(jpsswd)==false)
		          {
		          		window.alert("Enter valid password. It can include digits,alphabets,@ and _");
		          		return false;
		          }
		          else if(jcnfpsswd=="")
		          {
			          	window.alert("Confirm Password is empty");
		          	return false;
		          }
		          else if(/^[0-9A-z @_]+$/.test(jcnfpsswd)==false)
		          {
		          		window.alert("Enter valid confirm password. It can include digits,alphabets,@ and _");
		          		return false;
		          }
		          else if(jpsswd!=jcnfpsswd)
		          {
		          		window.alert("Password didn't match");
		          		return false;
		          }
		          else if(jsmail=="")
		          {
		          	window.alert("Enter valid email");
		          	return false;
		          }


		          return true;

		    }
    	</script>

</body>
</html>
