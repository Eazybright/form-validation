<html>
<head>
	<title>Eazybright.net</title>
</head>
<body bgcolor="grey">
<center>

<h1><?php echo "Welcome to your Home page,".$_POST['username']; ?></h1>
</center>

<a href="<?= base_url('form/login')?>">Logout</a>
</body>
</html>