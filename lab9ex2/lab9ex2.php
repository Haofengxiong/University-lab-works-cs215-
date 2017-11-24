<html>
<head>
<title>Lab9ex2</title>
<style>
body
{
	background-color:lightblue;
	font-size:24pt;
}

</style>
</head>
<body>
<?php

echo "<h3>The information you entered: </h3>";
echo "First name: " . $_POST["firstName"] . "<br>";
echo "Last name: " . $_POST["lastName"] . "<br>";
echo "Gender: " . $_POST["choice"] . "<br>";
echo "Nationality: " . $_POST["nation"] . "<br>";
echo "Address: " . $_POST["address"] . "<br>";

echo "Medical history: ";
for($i=0;$i<5;$i++)
{
echo $_POST['history'][$i] . " ";
}
echo "<br>";

echo "Current medication: " . $_POST["YesNo"] . "<br>";

if( ($_POST["YesNo"]) == "Yes" )
{
	echo "List of current medication: " . $_POST["current"];
}

?>
<hr>
<a href="http://www2.cs.uregina.ca/~xiong20h/">back to home page</a><br><br>
</body>
</html>