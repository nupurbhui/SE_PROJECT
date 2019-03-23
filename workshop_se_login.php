<html>
      <head>
        <title>Login</title>
        <style>
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
            body {
                background: url("598.jpg");
                background-repeat: no-repeat;
                background-size: 100% 100%;
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
      <body>
        <div>
          <ul>
           <!-- <li><a class="active" href="index.html">Home</a></li>
            <li><a href="#news">Booking</a></li>
            <li><a href="#contact">Hall reviews</a></li>-->
            <li style="float:right"><a href="Facultyregistrationform.php">Faculty Register</a></li>
            <li style="float:left"><a href="homep.html">Home</a></li>
          </ul>
        </div>

          <center class="first">
              <form action="login_php.php" method="POST" name="form">
                  <center style="font-size:35px">Login form</center><br><br>
                  <b>Login as </b>
                        <input type="radio" value="faculty" name="login_as" checked>Faculty
                        <input type="radio" value="student" name="login_as">Student
                  <br>
                  <br>
                  userid&nbsp&nbsp<input type="text" name="userid" placeholder="16331A05B6"><br><br>
                  <br>
                  password&nbsp&nbsp<input type="password" name="pswd" id="pswd" placeholder="Password">
                  <br><br>
                  <input type="checkbox" onclick="myFunction()">Show Password
                  <br>
                  <br>
                  <input type="submit" value="Login" onclick="return validation()">
                  <input type="reset" value="Reset">
              </form>
          </center>

      <script language="Javascript">
             function validation()
            {
                  var juserid = document.form.userid.value;
                  var jpassword = document.form.pswd.value;
                  if(juserid==""||juserid.length!=10)
                  {
                        window.alert("Username should me of 10 characters in the form 16331A0551");
                        return false;
                  }
                  else if(jpassword==""||jpassword.length<8)
                  {
                        window.alert("Password should be minimum of 8 characters");
                        return false;
                  }

                return true;

            }

            function myFunction() {
                        var x = document.getElementById("pswd");
                        if (x.type === "password") {
                          x.type = "text";
                        }
                        else {
                          x.type = "password";
                        }
                      }
        </script>

      </body>
</html>
