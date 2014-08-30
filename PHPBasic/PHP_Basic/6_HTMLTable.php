<!DOCTYPE html>
<html>
	<style>
		td:first-child { 
			background: orange ;
		}
		table {
		    border-collapse: collapse;
		}
		
		table, th, td {
		    border: 1px solid black;
		}
	</style>

<body>

<?php
    informationTable("Goshko","0882-321-423",24,"Hadji Dimitar");
	
	function informationTable($name, $phone, $age, $adres){
?>

<table>
	<tr>
		<td>
			Name
		</td>
		<td>
<?php
echo "$name";
?>			
		</td>
	</tr>
	<tr>
		<td>
			Phone Number
		</td>
		<td>
<?php
echo "$phone";
?>				
		</td>
	</tr>
	<tr>
		<td>
			Age
		</td>
		<td>
<?php
echo "$age";
?>		
		</td>
	</tr>
	<tr>
		<td>
			Address
		</td>
		<td>
<?php
echo "$adres";}
?>		
		</td>
	</tr>
</table>


</body>
</html>