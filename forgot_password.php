<html>
<head>
	<title>Eazybright.net</title>
</head>
<body bgcolor="pink">
<center>
<?php echo "Enter your details to verify your account"; ?>

<?php echo form_open(); ?>
	
		<h5>First Name</h5>
		<?php echo form_error('firstname'); ?>
		<input type="text" name="firstname" value="<?php echo set_value("firstname"); ?> "  size="50"/>

		<h5>Last Name</h5>
		<?php echo form_error('lastname'); ?>
		<input type="text" name="lastname" value="<?php echo set_value("lastname"); ?> " size="50"/>

		<h5>Username</h5>
		<?php echo form_error('username'); ?>
		<input type="text" name="username" value="<?php echo set_value('username'); ?>" size="50" />
		
		<h5>Email address</h5>
		<?php echo form_error('email'); ?>
		<input type="text" name="email" value="<?php echo set_value('email'); ?> " size="50" />
		
		<form>
		<div><input type="submit" value="submit" /></div>
		</form>

</center>
<a href="<?= base_url('form/login')?>">Sign in</a>
</body>
</html>