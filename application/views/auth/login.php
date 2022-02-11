<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h3>form login</h3>
	<?php if(!empty($output)):?>
	<?php echo $output ?>
	<?php endif?>
		<form action="" method="post">
			<label for="">Username</label><br>
			<input type="text" name="name" required><br>
			<label for="password">Password</label><br>
			<input type="password" name="password" required><br>
			<button type="submit">Login</button>
		</form>
</body>
</html>
