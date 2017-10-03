<html>
<head>
	<title>Eazybright.net</title>
</head>

	<body bgcolor="silver">
		<center>
				<h1> Welcome to Eazybright Forum</h1>
				</hr><br>
				<h5><?php echo "Please sign up below"; ?></h5>

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
					
					<h5>Password</h5>
					<?php echo form_error('password'); ?>
					<input type="password" name="password" value="<?php echo set_value('password'); ?>" size="50" />
					
					<h5>Password confirm</h5>
					<?php echo form_error('passconf'); ?>
					<input type="password" name="passconf" value="<?php echo set_value('passconf'); ?>" size="50" />
					
					<h5>Email address</h5>
					<?php echo form_error('email'); ?>
					<input type="text" name="email" value="<?php echo set_value('email'); ?> " size="50" />

			<div>
				<label for="sex">Sex:</label>
				<?php echo form_error('sex'); ?>
				<select name="sex">
				<option value="Male" >Male</option>
				<option value="Female" >Female</option>
				</select>
			</div>
					<form>
					<div><input type="submit" value="submit" /></div>
					</form>
					
					<h5><?php echo "Already registered? </br>Click below to sign in "; ?></h5>
					<a href="<?= base_url('form/login')?>">Sign in</a>
		</center>
	</body>
</html>
	