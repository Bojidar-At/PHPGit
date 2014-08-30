<!DOCTYPE html>
<html>
	<head>
		<title>2. Most Friquent Tag</title>
		<meta name="description" content="Write a PHP script MostFrequentTag.php which generates an HTML input text field and a submit button. In the text field the user must enter different tags, separated by a comma and a space (\", \"). When the information is submitted, the script should generate a list of the tags, sorted by frequency. Then you must print: \"Most Frequent Tag is: [most frequent tag]\"">
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
		$mostFreyuent = array_count_values($tehtArr);
		arsort($mostFreyuent);
		$answer = key($mostFreyuent);
		foreach($mostFreyuent as $key => $value){
		 echo $key . " : " . $value . " times <br/>";
		}
			
		
		echo "<br/>Most Frequent Tag is: " . $answer;

    }
?>
	
	</body>
</html>
