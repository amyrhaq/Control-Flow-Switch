<!-- Replace the two underscores to make the switch also check for 3 and 4. -->
<html>
<head>
	<title>Multiple Cases</title>
</head>
<body>
<?php 
$i = 5;
switch ($i) {
 	case 0:
 		echo "$i is 0";
 		break;
 	case 1:
 	case 2:
 	case 3:
 	case 4:
 	case 5:
 		echo "$i is somewhere btwn 1 and 5";
 		break;
 	case 6:
 	case 7:
 		echo "$i is either 6 or 7";
 		break;
 	default:
 		echo "I dont know how much /$i is";
 } ?>
</body>
</html>