<!-- Create a switch statement with 3 different cases and a default case if you wish. 
Feel free to use the alternative syntax as well! -->
<html>
<head>
	<title>All On Your Own!</title>
</head>
<body>
<?php
$color = 'green';
switch ($color) 
{
 	case 'green':
 		echo "Your favorite color is green";
 		break;
 	case 'red':
 		echo "Your favorite color is red";
 		break;
 	case 'blue':
 		echo "Your favorite color is blue";
 		break;
 	
 	default:
 		echo "Your favorite color is neither green, red, or blue";
 		break;
 } 
?>
</body>
</html>
