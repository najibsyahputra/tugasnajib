	<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
// Set session variables
$_SESSION["favcolor"] = "kucing";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
?>

</body>
</html>

	
