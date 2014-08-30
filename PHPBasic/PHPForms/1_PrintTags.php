<!DOCTYPE html>
<html>
	<head>
		<title>1. Print Tags</title>
		<meta name="description" content="Enter different tags, separated by a comma and a space (\", \"). When the information is submitted, the script should split the tags, put them in an array and print out the array">
	</head>
	<body>
		Enter Tags:<br />
		<form method="get">
			<input type="text" name="text" />
			<input type="submit" name="submit"/>
		</form>
	
	
<?php
    if(isset($_GET['submit'])){
    	$teht=htmlentities($_GET['text']);		
		$tehtArr = explode(", ", $teht);
		foreach($tehtArr as $key => $value){
 				 echo $key . " : " . $value . "<br/> ";
			}
    }
?>
	
	</body>
</html>
