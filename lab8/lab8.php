<html>
<head>
<!-- The following CSS might help you to format the table: -->
<style type="text/css">
table, td, th{
border:1px solid #A7C942;
margin: 0 auto;
text-align: center;
}
th{
background-color: #A7C942;
}
table{
border-collapse:collapse;
width: 60%;
}
.even_row{
background-color: #EAF2D3;
}
</style>

<head>

<body>

<?php
echo "<table>";
echo "<tr>";
for($t=1;$t<=5;$t++)
{
	echo "<th><p>Column $t</p></th>";
}
echo "</tr>";
for($i=1;$i<=10;$i++)
{
	echo "<tr></tr>";
	for($j=1;$j<=5;$j++)
	{
		if($i%2==0)
			echo "<td class='even_row'><p>row $i, col $j</p></td>";
		else
			echo "<td><p>row $i, col $j</p></td>";
	}
}

echo "</table>";
?>

<a href="http://www2.cs.uregina.ca/~xiong20h">Go back to homepage</a><br>
</body>
</html>