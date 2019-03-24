<?php


session_start();

$username = $_POST['userid'];
$password = $_POST['pswd'];
$login_as = $_POST['login_as'];
$faculty = 0;

$link = mysqli_connect('localhost','root','');
mysqli_select_db($link,'workshop');


if($login_as=='faculty')
{
    $quer = mysqli_query($link,"SELECT * FROM factulty_register");
    while ($row = mysqli_fetch_array($quer))
    {
        if($row['fid'] == $username && $row['psswd'] == $password)
        {
            $_SESSION['uname'] = $username;
            $faculty = 0;
            header('Location: check_student.php');
        }
    }
    if($faculty){
        header('Location: invalid_credentials.php');
    }
}

if($login_as=='student')
{
    $stu1=$stu2=$stu3=$stu4=1;
    if(is_numeric(substr($username,0,5)))
    {
        $stu1=0;
        if(is_numeric(substr($username,6,4)))
        {
            $stu2=0;
            if($username[5]=='A')
            {
                $stu3=0;
                if($username==$password)
                {
                    $stu4=0;
                    $_SESSION['uname'] = $username;
                    header('Location:student_view_details.php');
                }
                if($stu4){
                    header('Location: invalid_credentials.php');
                }
            }
            if($stu3){
                header('Location: invalid_credentials.php');
            }
        }
        if($stu2){
            header('Location: invalid_credentials.php');
        }
    }
    if($stu1){
        header('Location: invalid_credentials.php');
    }
}



?>
