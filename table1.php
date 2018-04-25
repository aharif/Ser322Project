<html>
<head>
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div class="container-fluid">
<?php
$con = @mysql_connect("localhost", "root", "");
if (! $con) {
    die("Cannot connect: " . mysql_error());
}

echo "<center><h1>NWNS Arcade Database for SER 322</h1></center> <hr />";
mysql_select_db("Arcades", $con);

// update
if (isset($_POST['update'])) {
    $UpdateQuery = "UPDATE Prizes SET ID='$_POST[id]', Name='$_POST[name]', Type='$_POST[type]', TicketValue='$_POST[ticketvalue]', DateAdded='$_POST[dateadded]'  WHERE ID='$_POST[hidden]'";
    mysql_query($UpdateQuery, $con);
}

// delete
if (isset($_POST['delete'])) {
    $DeleteQuery = "DELETE FROM Prizes WHERE ID='$_POST[hidden]'";
    mysql_query($DeleteQuery, $con);
}

// add
if (isset($_POST['add'])) {
    $AddQuery = "INSERT INTO Prizes(ID, Name, Type,TicketValue, DateAdded) VALUES ('$_POST[uid]', '$_POST[uname]', '$_POST[utype]', '$_POST[uticketvalue]', '$_POST[udateadded]')";
    mysql_query($AddQuery, $con);
}

$sql = "SELECT * FROM Prizes";
$myData = mysql_query($sql, $con);

echo "<h3>Prizes information table</h3>";

echo "<table class='table table-hover'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Type</th>
<th>TicketValue</th>
<th>DateAdded</th>
</tr>";

while ($record = mysql_fetch_array($myData, MYSQL_ASSOC)) {
    echo "<form action=table1.php method=post>";
    echo "<tr>";
    echo "<td>" . "<input type=text class='form-control' name=id value=" . $record['ID'] . " </td>";
    echo "<td>" . "<input type=text class='form-control' name=name value=" . $record['Name'] . " </td>";
    echo "<td>" . "<input type=text class='form-control' name=type value=" . $record['Type'] . " </td>";
    echo "<td>" . "<input type=text class='form-control' name=ticketvalue value=" . $record['TicketValue'] . " </td>";
    echo "<td>" . "<input type=text class='form-control' name=dateadded value=" . $record['Date Added'] . " </td>";
    echo "<td>" . "<input type=hidden class='form-control' name=hidden value=" . $record['ID'] . " </td>";
    echo "<td>" . "<button type=submit name=update value=update class='btn btn-primary'>update</button>" . " </td>";
    echo "<td>" . "<button type=submit name=delete value=delete class='btn btn-danger'>delete</button>" . " </td>";
    echo "</tr>";
    echo "</form>";
}
echo "<form action=table1.php method=post>";
echo "<tr>";
echo "<td><input type=text class='form-control' name=uid></td>";
echo "<td><input type=text class='form-control' name=uname></td>";
echo "<td><input type=text class='form-control' name=utype></td>";
echo "<td><input type=text class='form-control' name=uticketvalue></td>";
echo "<td><input type=text class='form-control' name=udateadded></td>";
echo "<td>" . "<button class='btn btn-info' type=submit name=add value=add>add</button>" . " </td>";
echo "</form>";
echo "</table>";
// end

mysql_close($con);
?>
</div>
	</br>
	<div class="container-fluid">
		<form action="home.php" method="post">
			<!--<input id="goback" type="submit" name="table6" value="Go Back" />-->
			<button class='btn btn-success btn-lg' id="goback" type="submit"
				name="table1">Go Back</button>
		</form>
	</div>

</body>

</html>
