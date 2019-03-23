<?php //to ensure you are using same session
session_unset();
session_destroy(); //destroy the session
header("location:/workshop_se/homep.html"); //to redirect back to "index.php" after logging out
exit();
?>
