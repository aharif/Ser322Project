<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<div class="container-fluid">
<?php
$con = @mysql_connect("localhost", "root", "");
if(!$con) {
	die("Cannot connect: " . mysql_error());
}
<<<<<<< HEAD
echo "<center><h1> NWNS Database </h1></center> <hr />";
mysql_select_db("Cars", $con);
=======
echo "<center><h1>NWNS Arcade Database for SER 322</h1></center> <hr />";
mysql_select_db("Arcades", $con);
>>>>>>> 77c37b72bd85c63993b894487e6d2bc44a20436c

//update
if (isset($_POST['update'])) {
	$UpdateQuery = "UPDATE Customer SET CustomerEmail='$_POST[customeremail]', Fname='$_POST[fname]', Lname='$_POST[lname]', `DOB`='$_POST[dob]' WHERE CustomerEmail='$_POST[hidden]'";  
    mysql_query($UpdateQuery, $con);
};

//delete
if (isset($_POST['delete'])) {
	$DeleteQuery = "DELETE FROM Customer WHERE CustomerEmail='$_POST[hidden]'";
    mysql_query($DeleteQuery, $con);
};

//add
if (isset($_POST['add'])) {
	$AddQuery = "INSERT INTO Customer (`CustomerEmail`, `Fname`, `Lname`, `DOB`) VALUES ('$_POST[ucustomeremail]', '$_POST[ufname]', '$_POST[ulname]', '$_POST[udob]')";
    mysql_query($AddQuery, $con);
};

$sql = "select * from Customer";
$myData = mysql_query($sql, $con);

<<<<<<< HEAD
echo "<h3>Customer Table</h3>";
=======
echo "<h3>Customer information Table</h3>";
>>>>>>> 77c37b72bd85c63993b894487e6d2bc44a20436c
echo "<table class='table table-hover'>
<tr>
<th>CustomerEmail</th>
<th>Fname</th>
<th>Lname</th>
<th>DOB</th>
</tr>";
while($record = mysql_fetch_array($myData)) {
	echo "<form action=table3.php method=post>";
	echo "<tr>";
	echo "<td>" . "<input type=text class='form-control' name=customeremail value=" . $record['CustomerEmail'] . " </td>";
	echo "<td>" . "<input type=text class='form-control' name=fname value=" . $record['Fname'] . " </td>"; 
	echo "<td>" . "<input type=text class='form-control' name=lname value=" . $record['Lname'] . " </td>"; 
	echo "<td>" . "<input type=text class='form-control' name=dob value=" . $record['DOB'] . " </td>";
	echo "<td>" . "<input type=hidden class='form-control' name=hidden value=" . $record['CustomerEmail'] . " </td>";
	//echo "<td>" . "<input type=submit name=update value=update" . " </td>";
	//echo "<td>" . "<input type=submit name=delete value=delete" . " </td>";
	echo "<td>" . "<button type=submit name=update value=update class='btn btn-primary'>update</button>" . " </td>";
	echo "<td>" . "<button type=submit name=delete value=delete class='btn btn-danger'>delete</button>" . " </td>";
	echo "</tr>";
	echo "</form>";
}
echo "<form action=table3.php method=post>";
echo "<tr>";
echo "<td><input type=text class='form-control' name=ucustomeremail></td>";
echo "<td><input type=text class='form-control' name=ufname></td>";
echo "<td><input type=text class='form-control' name=ulname></td>";
echo "<td><input type=text class='form-control' name=udob></td>";
//echo "<td>" . "<input type=submit name=add value=add" . " </td>";
echo "<td>" . "<button class='btn btn-info' type=submit name=add value=add>add</button>" . " </td>";
echo "</form>";
echo "</table>";
//end


mysql_close($con);
?>
</div>
</br>
<form action="home.php" method="post">
	<!--<input id="goback" type="submit" name="table6" value="Go Back" />-->
	<button class='btn btn-success btn-lg' id="goback" type="submit" name="table3">Go Back</button>
</form>

</body>

</html>
