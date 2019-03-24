<?php
session_start();
$reg_no = $_POST['reg_no'];

$link = mysqli_connect('localhost','root','');
mysqli_select_db($link,'workshop');
$flag = 1;
$stu1=$stu2=$stu3=$stu4=1;
if(is_numeric(substr($reg_no,0,5)))
{
    $stu1=0;
    if(is_numeric(substr($reg_no,6,4)))
    {
        $stu2=0;
        if($reg_no[5]=='A')
        {
            $stu3=0;
            $quer = mysqli_query($link,"SELECT * FROM student_register");
            if(mysqli_num_rows($quer)>0)
            {

	            while ($row = mysqli_fetch_array($quer))
	    		{

	        		if($row['sid'] == $reg_no)
	        		{
	            		$flag=0;
	            		$_SESSION['flag'] = $flag;
	            		header('Location: navigate_check.php');
	        		}
	    		}
	    		if($flag==1){
	    			$_SESSION['flag'] = $flag;
	    			header('Location: navigate_check.php');
	    		}
	    	}
	    	else
	    	{
	    		$_SESSION['flag'] = $flag;
	    		header('Location: navigate_check.php');
	    	}
        }
        if($stu3)
        {
            header('Location: check_student_valid.php');
        }
    }
    if($stu2)
    {
        header('Location: check_student_valid.php');
    }
}
if($stu1)
{
        header('Location: check_student_valid.php');
}




?>
