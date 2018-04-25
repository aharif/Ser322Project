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
echo "<center><h1> NWNS Arcarde Database for SER 322</h1></center> <hr />";
mysql_select_db("Cars", $con);
=======
echo "<center><h1>NWNS Arcade Database for SER 322</h1></center> <hr />";
mysql_select_db("Arcades", $con);
>>>>>>> 77c37b72bd85c63993b894487e6d2bc44a20436c

//update
if (isset($_POST['update'])) {
	$UpdateQuery = "UPDATE `Employee` SET EmployeeID='$_POST[employeeid]', Fname='$_POST[fname]', Lname='$_POST[lname]', Sex='$_POST[sex]',DOB='$_POST[dob]' WHERE EmployeeID='$_POST[hidden]'";  
    mysql_query($UpdateQuery, $con);
};

//delete
if (isset($_POST['delete'])) {
	$DeleteQuery = "DELETE FROM `Employee` WHERE EmployeeID='$_POST[hidden]'";
    mysql_query($DeleteQuery, $con);
};

//add
if (isset($_POST['add'])) {
	$AddQuery = "INSERT INTO `Employee` (EmployeeID, Fname, Lname, Sex,DOB) VALUES ('$_POST[uemployeeid]', '$_POST[ufname]', '$_POST[ulname]', '$_POST[usex]','$_POST[udob]')";
    mysql_query($AddQuery, $con);
};

$sql = "select * from `Employee`";
$myData = mysql_query($sql, $con);

<<<<<<< HEAD
echo "<h3>Employee Table</h3>";
=======
echo "<h3>Employee information table</h3>";
>>>>>>> 77c37b72bd85c63993b894487e6d2bc44a20436c
echo "<table class='table table-hover'>
<tr>
<th>EmployeeID</th>
<th>Fname</th>
<th>LName</th>
<th>Sex</th>
<th>DOB</th>
</tr>";
while($record = mysql_fetch_array($myData)) {
	echo "<form action=table2.php method=post>";
	echo "<tr>";
	echo "<td>" . "<input type=text class='form-control' name=employeeid value=" . $record['EmployeeID'] . " </td>";
	echo "<td>" . "<input type=text class='form-control' name=fname value=" . $record['Fname'] . " </td>"; 
	echo "<td>" . "<input type=text class='form-control' name=lname value=" . $record['Lname'] . " </td>";
	echo "<td>" . "<input type=text class='form-control' name=sex value=" . $record['Sex'] . " </td>";
	echo "<td>" . "<input type=text class='form-control' name=dob value=" . $record['DOB'] . " </td>";
	echo "<td>" . "<input type=hidden class='form-control' name=hidden value=" . $record['EmployeeID'] . " </td>";
	//echo "<td>" . "<input type=submit name=update value=update" . " </td>";
	//echo "<td>" . "<input type=submit name=delete value=delete" . " </td>";
	echo "<td>" . "<button type=submit name=update value=update class='btn btn-primary'>update</button>" . " </td>";
	echo "<td>" . "<button type=submit name=delete value=delete class='btn btn-danger'>delete</button>" . " </td>";
	echo "</tr>";
	echo "</form>";
}
echo "<form action=table2.php method=post>";
echo "<tr>";
echo "<td><input type=text class='form-control' name=uemployeeid></td>";
echo "<td><input type=text class='form-control' name=ufname></td>";
echo "<td><input type=text class='form-control' name=ulname></td>";
echo "<td><input type=text class='form-control' name=usex></td>";
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
	<button class='btn btn-success btn-lg' id="goback" type="submit" name="table2">Go Back</button>
</form>

</body>

</html>
