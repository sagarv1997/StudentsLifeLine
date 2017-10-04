<?php
	include_once 'includes/header.inc.php';
?>

<section class="main-container">
	<div class="main-wrapper">
		<h2>Signup</h2>
		<form class="input-form" action="includes/signup.inc.php" method="POST">
			<input type="text" name="first" placeholder="Firstname">
			<input type="text" name="last" placeholder="Lastname">
			<input type="email" name="email" placeholder="E-mail">
			<input type="text" name="uid" placeholder="Username" required>
			<input type="password" name="pwd" placeholder="Password" required>
			<button type="submit" name="submit">Sign up</button>
		</form>
	</div>
</section>

</body>
</html>