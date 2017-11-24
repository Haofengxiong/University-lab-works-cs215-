<html>
<head>
<title>Lab11</title>
</head>
<body>
<?php

if (isset($_POST["add"]))
{
	$con = mysql_connect("localhost","xiong20h","091285");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	echo "Connection worked...." . "<br>" . "<br>";
	mysql_select_db("xiong20h", $con);
	echo "<h1>Adding to the Database</h1>" . "<br>" . "<br>";
	$sql = "INSERT INTO person (firstName, lastName, ID) VALUES('$_POST[fn]', '$_POST[ln]', $_POST[id])";
	mysql_query($sql, $con);
	echo "1 record added" . "<br>" . "<br>";
	mysql_close($con);
}
else if(isset($_POST["query"]))
{
	$con = mysql_connect("localhost","xiong20h","091285");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	echo "Connection worked...." . "<br>" . "<br>";
	mysql_select_db("xiong20h", $con);
	echo "<h1>Quering a database</h1>" . "<br>" . "<br>";
	echo "<h3>Looking for result</h3>" . "<br>" . "<br>";
	
	if($_POST["search"] == "*")
	{
		$sql = "SELECT * FROM person";
		$result = mysql_query($sql, $con);
		echo "<table border=1>";
		echo "<tr><th>FirstName</th><th>LastName</th><th>ID</th></tr>";
		while ($row = mysql_fetch_array($result))
		{
			echo "<tr>";
			echo "<td>" . $row['firstName'] . "</td><td>" . $row['lastName']. "</td><td>". $row['ID'] . "</td>";
			echo "</tr>";
		}
		echo "</table>";
		mysql_close($con);
	}
	else
	{
		$cfc=$_POST['field'];
		if($cfc == "sid")
		{
			$query=sprintf("SELECT * FROM person WHERE ID='$_POST[search]'", 
				mysql_real_escape_string($_POST['search']));
			$result = mysql_query($query);
			echo "<table border=1>";
			echo "<tr><th>FirstName</th><th>LastName</th><th>ID</th></tr>";
			while ($row = mysql_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>" . $row['firstName'] . "</td><td>" . $row['lastName']. "</td><td>". $row['ID'] . "</td>";
				echo "</tr>";
			}
			echo "</table>";
			
			if(mysql_num_rows($result) == 0)
			{
				echo "<h2>Can't find the record in database!</h2>" . "<br>";
			}
			
			mysql_close($con);
		}
		else if($cfc == "sfn")
		{
			$query=sprintf("SELECT * FROM person WHERE firstName='$_POST[search]'",
					mysql_real_escape_string($_POST['search']));
			$result = mysql_query($query);
			echo "<table border=1>";
			echo "<tr><th>FirstName</th><th>LastName</th><th>ID</th></tr>";
			while ($row = mysql_fetch_array($result))
 			 {
     			 echo "<tr>";
     			 echo "<td>" . $row['firstName'] . "</td><td>" . $row['lastName']. "</td><td>". $row['ID'] . "</td>";
     			 echo "</tr>";
  			}
			echo "</table>";
			
			if(mysql_num_rows($result) == 0)
			{
				echo "<h2>Can't find the record in database!</h2>" . "<br>";
			}
			
			mysql_close($con);
		}
		else if($cfc == "sln")
		{
			$query=sprintf("SELECT * FROM person WHERE lastName='$_POST[search]'",
					mysql_real_escape_string($_POST['search']));
			$result = mysql_query($query);
			echo "<table border=1>";
			echo "<tr><th>FirstName</th><th>LastName</th><th>ID</th></tr>";
			while ($row = mysql_fetch_array($result))
 	 		{
     			 echo "<tr>";
     			 echo "<td>" . $row['firstName'] . "</td><td>" . $row['lastName']. "</td><td>". $row['ID'] . "</td>";
     			 echo "</tr>";
 			}
			echo "</table>";
			
			if(mysql_num_rows($result) == 0)
			{
				echo "<h2>Can't find the record in database!</h2>" . "<br>";
			}
			
			mysql_close($con);
		}
	}
}

?>
<a href="http://www2.cs.uregina.ca/~xiong20h/lab11/lab11.html">Go back</a>
</body>
</html>