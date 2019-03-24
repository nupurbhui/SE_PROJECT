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

					.first {
                width:300px;
                height:300px;
                background-color: white;
                position:fixed;
                margin-left:-150px; /* half of width */
                margin-top:-150px;  /* half of height */
                top:50%;
                left:50%;
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
            <li style="float:right"><a href="facultly_view_details.php">View Details</a></li>
            <li style="float: center"><a><?php echo "Hello ".$_SESSION['uname']." !"?></a></li>

          </ul>
        </div>

          <center class="first">
              <form action="check_student_php.php" method="POST" name="form">
									<br><br>
									<center style="font-size:35px">Student Registration Check</center>
                  <br>
                  <br>
                  Registration No.&nbsp&nbsp<input type="text" name="reg_no" placeholder="16331A0551"><br><br>
                  <br>
                  <br>
                  <input type="submit" value="Check" onclick="return validation()">
                  <input type="reset" value="Reset">
              </form>
          </center>
          <script type="text/javascript">
            function validation()
            {
                  var jregno = document.form.reg_no.value;
                  if(jregno==""||jregno.length!=10)
                  {
                        window.alert("Registration Number should me of 10 characters");
                        return false;
                  }
                return true;
            }


          </script>





      </body>
</html>
