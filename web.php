<?php

$sql = "SELECT *FROM YTImages"
$result = mysqli_query($dbc,$sql) or die("Bad Insert: $sql";

?>

<h1> Images </h1>
<table>
<?php
$i = 0;
	while($row = mysqli_fetch_assoc($result)
	{
		if($i%3 == 0)
		{
			echo "<tr>";
		}
		echo "<td><img src = 'shh_website/{$row['img']}' alt = '{$row['title']}'></td>";
		if(i%3 == 2)
		{
			echo "</tr>";
		}
	}

?>
</table>


