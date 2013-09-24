<!-- Fill in the blanks with the correct code. Add the default case.  -->
<html>
	<head>
		<title>Swith Syntax</title>
	</head>
	<body>
    <?php
    $fruit = "Apple"; //if this is any other fruit, it won't be yummy :P
    
    switch ($fruit) 
	    {
	        case 'Apple':
	            echo "Yummy.";
	            break;
	        default;
	        	echo "The apple isn't yummy";
	    }
    
    ?>
    </body>
</html>