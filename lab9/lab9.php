<html>
<head>
<title>Lab9-1</title>
<style type="text/css">
td
{
	border:2px solid black;
}

img
{
	width:250px;
	height:180px;
}

h3
{
	text-align:center;
}
</style>
</head>
<body bgcolor="<?php echo $_POST['bgc']; ?>">
<h1>Displaying Photos</h1>
<hr>
<?php
$photo[0]="photo1";
$photo[1]="photo2";
$photo[2]="photo3";
$photo[3]="photo4";
for($i=0;$i<4;$i++)
{
	
	if(($_FILES["$photo[$i]"]["type"] == "image/gif") || ($_FILES["$photo[$i]"]["type"] == "image/jpeg") &&
    	($_FILES["$photo[$i]"]["size"] < 2000000))
	{
		if($_FILES["$photo[$i]"]["error"] > 0)
		{
			echo "Return Code: " . $_FILES["$photo[$i]"]["error"] . "<br>";
		}
		else
		{
			if(file_exists("upload/" . $_FILES["$photo[$i]"]["name"]))
			{
				echo $_FILES["$photo[$i]"]["name"] . " already exists. " . "<br>";
			}
			else 
			{
				move_uploaded_file($_FILES["$photo[$i]"]["tmp_name"],
				"upload/" . $_FILES["$photo[$i]"]["name"]);
				echo "Stored in: " . "upload/" . $_FILES["$photo[$i]"]["name"] . "<br>";
			}
		}
	}
	else
	{
		echo "Invalid file" . "<br>";
	}

}

$a="upload/" . $_FILES["photo1"]["name"];
$b="upload/" . $_FILES["photo2"]["name"];
$c="upload/" . $_FILES["photo3"]["name"];
$d="upload/" . $_FILES["photo4"]["name"];
$n1=$_POST["name1"];
$n2=$_POST["name2"];
$n3=$_POST["name3"];
$n4=$_POST["name4"];
echo "<table>
  <tr>
    <td><img src='$a'><br><h3>$n1</h3></td><td><img src='$b'><br><h3>$n2</h3></td>
  </tr>
  <tr>
    <td><img src='$c'><br><h3>$n3</h3></td><td><img src='$d'><br><h3>$n4</h3></td>
  </tr>
</table>"
?>
<hr>
<a href="http://www2.cs.uregina.ca/~xiong20h">Go to HomePage</a>
</body>
</html>
