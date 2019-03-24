<?php
/**
 * Created by PhpStorm.
 * User: Varun Reddy
 * Date: 3/24/2019
 * Time: 5:25 AM
 */
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <title>Workshop Registration</title>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#">Workshop Registration</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="workshop_se_login.php" id="login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="workshop_se_registration.php" id="register">Register</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="container-fluid">
            <div class="box">
                <h1>Registration Form</h1>
                <div class="form-inline">
                    <label for="role">Register as:</label>
                    <select class="form-control" name="role" id="role" onchange="display_form()">
                        <option>Select an option</option>
                        <option value="student">Student</option>
                        <option value="faculty">Faculty</option>
                    </select>
                </div>
                <form id="student" method="post" name="student_reg" style="display: none;">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="first_name" class="float-left">First Name</label>
                            <input id="first_name" class="form-control" name="first_name" placeholder="First Name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="last_name" class="float-left">Last Name</label>
                            <input id="last_name" class="form-control" name="last_name" placeholder="Last Name" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="studentid" class="float-left">Student ID</label>
                            <input id="studentid" class="form-control" type="text" name="studentid"
                                   pattern="[0-9]{5}[A-Z]{1}[0-9]{2}[A-Z0-9]{1}[0-9]{1}"
                                   title="The userid should be of 16331A05B6 this format!"
                                   required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="year" class="float-left">Year</label>
                            <select class="form-control" name="year" id="year">
                                <option value="1">1st</option>
                                <option value="2">2nd</option>
                                <option value="3">3rd</option>
                                <option value="4">4th</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="department" class="float-left">Dept.</label>
                            <select class="form-control" name="department" id="department">
                                <option value="cse">CSE</option>
                                <option value="ece">ECE</option>
                                <option value="mech">MECH</option>
                                <option value="eee">EEE</option>
                                <option value="it">IT</option>
                                <option value="civ">CIVIL</option>
                                <option value="che">CHE</option>
                                <option value="mba">MBA</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="qual" class="float-left">Qual.</label>
                            <select name="qualification" class="form-control" id="qual">
                                <option value="btech">BTECH</option>
                                <option value="mtech">MTECH</option>
                                <option value="mba">MBA</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="phone" class="float-left">Phone No.</label>
                            <input type="text" name="phone" id="phone" class="form-control"
                                   pattern="[0-9]{10}" title="It should contain only numbers" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email" class="float-left">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="dob" class="float-left">D.O.B</label>
                            <input type="date" class="form-control" id="dob" name="dob" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="gender" class="float-left">Gender</label>
                            <select class="form-control" id="gender" name="gender">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label class="float-left">I had taken prior permission from the councillor and HOD:</label>
                            <input type="radio" name="permission" value="yes" checked>Yes
                            <input type="radio" name="permission" value="no">No<br><br>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label class="float-left">Did you recieve any funds from the college:</label>
                            <input type="radio" name="fund" value="yes">Yes
                            <input type="radio" name="fund" value="no" checked>No
                        </div>
                    </div>
                    <div class="buttons">
                        <button type="submit" class="btn btn-lg btn-success">Submit</button>
                        <button type="reset" class="btn btn-lg btn-danger">Reset</button>
                    </div>
                </form>
                <form id="faculty" method="post" name="faculty_reg" style="display: none">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="first_name" class="float-left">First Name</label>
                            <input id="first_name" class="form-control" name="first_name" placeholder="First Name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="last_name" class="float-left">Last Name</label>
                            <input id="last_name" class="form-control" name="last_name" placeholder="Last Name" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="facultyid" class="float-left">Faculty ID</label>
                            <input id="facultyid" class="form-control" type="text" name="facultyid"
                                   pattern="[0-9]{5}[A-Z]{1}[0-9]{2}[A-Z0-9]{1}[0-9]{1}"
                                   title="The userid should be of 16331A05B6 this format!"
                                   required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="department" class="float-left">Dept.</label>
                            <select class="form-control" name="department" id="department">
                                <option value="cse">CSE</option>
                                <option value="ece">ECE</option>
                                <option value="mech">MECH</option>
                                <option value="eee">EEE</option>
                                <option value="it">IT</option>
                                <option value="civ">CIVIL</option>
                                <option value="che">CHE</option>
                                <option value="mba">MBA</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="qual" class="float-left">Qual.</label>
                            <select name="qualification" class="form-control" id="qual">
                                <option value="btech">BTECH</option>
                                <option value="mtech">MTECH</option>
                                <option value="mba">MBA</option>
                                <option value="phd">PhD</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="desig" class="float-left">Designation</label>
                            <select name="desig" class="form-control" id="desig">
                                <option value="Assistant Professor">Assistant Professor</option>
                                <option value="Senior Assistant Professor">Senior Assistant Professor</option>
                                <option value="Associate Professor">Associate Professor</option>
                                <option value="Professor">Professor</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="phone" class="float-left">Phone No.</label>
                            <input type="text" name="phone" id="phone" class="form-control"
                                   pattern="[0-9]{10}" title="It should contain only numbers" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email" class="float-left">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="pass" class="float-left">Type Password</label>
                            <input type="password" class="form-control" id="pass" name="password"
                                   onmouseover="display_pass(this)" onmouseout="hide_pass(this)" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="repass" class="float-left">Re-Type Password</label>
                            <input type="password" class="form-control" id="repass" name="repassword"
                                   onmouseover="display_pass(this)" onmouseout="hide_pass(this)" required>
                        </div>
                    </div>
                    <div class="buttons">
                        <button type="submit" class="btn btn-lg btn-success">Submit</button>
                        <button type="reset" class="btn btn-lg btn-danger">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
    <script>
        var role = document.getElementById("role");
        var student = document.getElementById("student");
        var faculty = document.getElementById("faculty");
        function display_form(){
            if( role.value === 'student'){
                student.style.display = "";
                faculty.style.display = "none";
                console.log("student");
            }
            else if( role.value === 'faculty'){
                student.style.display = "none";
                faculty.style.display = "";
                console.log("faculty");
            }
        }
        function display_pass(tag){
            tag.setAttribute('type', 'text');
        }
        function hide_pass(tag){
            tag.setAttribute('type', 'password')
        }
    </script>
</html>
