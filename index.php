<!DOCTYPE html>
<html>
<head>
	<title>Form validation menually</title>
</head>
<body>

<?php

if (isset($_POST['form1'])) {
	
	$u_email = $_POST['u_email'];
	if (empty($u_email)) {
		echo "Name cannot be empty";
	}

	$c1 = substr_count($u_email,"@");
	$c2 = substr_count($u_email, ".");

	if (($c1!=1)||($c2!=1)) {
		echo "Invalid email: @ count or . count failed";
	}

	else
	{
		$len = strlen($u_email);
		$p1 = strpos($u_email,"@");
		if (($p1==0)||($p1==$len-1)) {
			echo "Invalid email: @ is in fist position or last position";
		}

		else
		{
			$p2 = strpos($u_email,".");
			if (($p2==0)||($p2==$len-1)) {
			echo "Invalid email: . is in fist position or last position";

		}
		else
		{
			if ($p2<$p1) {
				echo "@ must be before .";
			}
			else{
				if ($p2-$p1==1) {
					echo "Invalid email: there must be one or more character between @ and .";
			}
		}
	}


}
}
}



?>


<form action="" method="post">
	
<table>
	<tr>
		<td>Name:</td>
		<td><input type="text" name="u_name"></td>
	</tr>
	<tr>
		<td>Email Address:</td>
		<td><input type="text" name="u_email"></td>
	</tr>
	<tr>
		<td>Username:</td>
		<td><input type="text" name="U_username"></td>
	</tr>
	<tr>
		<td>Password:</td>
		<td><input type="password" name="u_password"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit"  value="SEND" name="form1"></td>
	</tr>

</table>

</form>


</body>
</html>