<?php
session_start();
echo '
	<html>
		<head>
			<script>
				var flag = '.$_SESSION['flag'].';
				if(flag==1){
					var a = window.confirm("Registration Number not present. First register the student");
					if(a==true){
						window.location = "StudentRegistrationForm.php";
					}
					else{
						window.location = "check_student.php"
					}
				}
				else{
					var a = window.confirm("Registration Number present. Enter Workshop details");
					if(a==true){
						window.location = "workshop.php";
					}
					else{
						window.location = "check_student.php";
					}
				}
			</script>
		</head>
	</html>
	';
?>