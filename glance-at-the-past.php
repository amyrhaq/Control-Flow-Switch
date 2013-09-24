<!-- Write an if/elseif/else statement inside the editor and make it output anything you wish. -->
<html>
<head>
	<title>Glance at the Past!</title>
</head>
<body>
<p>
<?php 
$number = 10;
$guess = 5;
if ($guess > $number)
	{
		echo "Too high";
	}
	elseif ($guess < $number) 
	{
		echo "Too low";
	}
	else
	{
		echo "You guessed correctly";
	}
?>
</p>
</body>
</html>