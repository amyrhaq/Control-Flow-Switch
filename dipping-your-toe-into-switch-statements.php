<!-- Try and figure out which of these case blocks gets executed and smash that Submit button! -->
<html>
<head>
	<title>Dipping Your Toe into Switch Statements</title>
</head>
<body>
<p>
<?php 
	switch(2) //whatever this value is will result in the corresponding case below.
	{
		case 0:
			echo "The value is 0";
			break;
		case 1:
			echo "The value is 1";
			break;
		case 2:
			echo "The value is 2";
			break;
		default:
			echo "The value isnt 0,1 or 2";
		
	} 
?>
</p>
</body>
</html>