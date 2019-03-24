<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
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
                        <li class="nav-item active">
                            <a class="nav-link" href="workshop_se_login.php" id="login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="workshop_se_registration.php" id="register">Register</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="container-fluid">
            <div class="box">
                <br><br><br>
                <h1 class="text-white">Login Form</h1>
                <form action="workshop_se_login_php.php" method="post" name="login_form">
                    <br><br>
                    <div class="form-group">
                        <label for="userid" class="float-left">User ID</label>
                        <input id="userid" class="form-control" type="text" name="userid"
                               pattern="[0-9]{5}[A-Z]{1}[0-9]{2}[A-Z0-9]{1}[0-9]{1}"
                               title="The userid should be of 16331A05B6 this format!"
                               required>
                    </div><br>
                    <div class="form-group">
                        <label for="password" class="float-left">Password</label>
                        <input type="password" class="form-control" id="password" minlength="8" required
                               title="The password should be of minimum length of 8"
                               onmouseover="display_pass()" onmouseout="hide_pass()">
                    </div><br>
                    <div class="form-group">
                        <label for="type" class="float-left">Role</label>
                        <select class="form-control">
                            <option value="student">Student</option>
                            <option value="teacher">Teacher</option>
                        </select>
                    </div><br><br>
                    <div class="buttons">
                        <button type="submit" class="btn btn-lg btn-success">Submit</button>
                        <button type="reset" class="btn btn-lg btn-danger">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
    <script src="../js/bootstrap.min.js"></script>
    <script>
        var pass = document.getElementById("password");
        function display_pass(){
            pass.setAttribute('type', 'text');
        }
        function hide_pass(){
            pass.setAttribute('type', 'password')
        }
    </script>
</html>