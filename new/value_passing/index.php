<?php //$test = 'Hello'; 
//echo $_GET['name'];
?>
<html>

	<head>
	
	<title>Super Variables</title>
	
	</head>
		
	<body>
	<?php 
	if(isset($_GET['name']))
	{
	
	echo htmlspecialchars($_GET['name']);
	
	}
	else{
		echo 'Is not Set';
	} 
	
	?>
	<a href="about.php?name=sagar">About</a>
	
	</body>

</html>