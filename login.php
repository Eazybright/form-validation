<html>
<head>
	<title>Eazybright Forum</title>
	<link rel=”stylesheet” type=”text/css” href=”common.css” />
</head>
	<body>
		<center>
			<h1> Welcome to Eazybright Forum</h1>
			<h1>Login page!</h1>
			</hr><br>
			<h5><?php echo "Please sign in below"; ?></h5>
			
			<?php echo form_open(); ?>
			
			<h5>Username</h5>
			<?php echo form_error('username'); ?>
			<input type="text" name="username" value="<?php echo set_value('username'); ?>" size="50" />
			
			<h5>Password</h5>
			<?php echo form_error('password'); ?>
			<input type="password" name="password" value="<?php echo set_value('password'); ?>" size="50" />
			
			<form>
				<div><input type="submit" value="submit" /></div>
				</form>

				<h5><?php echo "Don't have an account? Create below"; ?></h5>
				<a href="<?= base_url('form/signup')?>">Sign up here</a>
				<?php echo "<br/>";?>
				<a href="<?= base_url('form/password')?>">forgot password</a>
		<center/>
    </body>
</html>