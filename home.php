<html>
<head>
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<?php
$con = @mysql_connect("localhost", "root", "");
if (! $con) {
    die("Cannot connect: " . mysql_error());
}
echo "<center><h1>NWNS Arcade Database for SER 322</h1></center> <hr />";
mysql_close($con);
?>
<div>
		<table align="center" cellpadding="12">
			<tr>
				<th><h2 style="color: blue;">Click on the Table you would like to
						view</h2></th>
				<th><h2 style="color: blue;">Click on the Pre-Selected Query you
						would like to view</h2></th>
			</tr>
			<tr>
				<td>
					<form action="table3.php" method="post">
						<!--<input id="table1" type="submit" name="table1" value="Customer" />-->
						<button id="table3" type="submit" class="btn">Customer information</button>
					</form>
				</td>
				<td>
					<form action="query1.php" method="post">
						<!--<input id="query1" type="submit" name="query1" value="Controllers by Continental" />-->
						<button id="query1" type="submit" class="btn">Controllers by
							Continental</button>
					</form>
				</td>
			</tr>
			<tr>
				<td>
					<form action="table2.php" method="post">
						<!--<input id="table2" type="submit" name="table2" value="Employee" />-->
						<button id="table2" type="submit" class="btn">Employee Information</button>
					</form>
				</td>
				<td>
					<form action="query2.php" method="post">
						<!--<input id="query2" type="submit" name="query2" value="CAN Signals with their Controller" />-->
						<button id="query2" type="submit" class="btn">CAN Signals with
							their Controller</button>
					</form>
				</td>
			</tr>
			<tr>
				<td>
					<form action="table7.php" method="post">
						<!--<input id="table6" type="submit" name="table6" value="Schedule" />-->
						<button type="submit" id="table7" class="btn">Employee Schedule</button>
					</form>
				</td>
				<td>
					<form action="query3.php" method="post">
						<!--<input id="query3" type="submit" name="query3" value="Male Pin Connector and Controller" />-->
						<button id="query3" type="submit" class="btn">Male Pin Connector
							and Controller</button>
					</form>
				</td>
			</tr>
			<tr>
				<td>
					<form action="table6.php" method="post">
						<!--<input id="table6" type="submit" name="table6" value="Game machine" />-->
						<button type="submit" id="table6" class="btn">Game Machine
							Information</button>
					</form>
				</td>

				<td>
					<form action="query4.php" method="post">
						<!--<input id="query4" type="submit" name="query4" value="All Cars Ordered by Manufacturing date" />-->
						<button id="query4" class="btn" type="submit">All Cars Ordered by
							Manufacturing date</button>
					</form>
				</td>
			</tr>
			<tr>
				<td>
					<form action="table4.php" method="post">
						<!--<input id="table5" type="submit" name="table5" value="Games" />-->
						<button type="submit" id="table4" class="btn">Game information</button>
					</form>
				</td>

				<form action="query5.php" method="post">
					<!--<input id="query5" type="submit" name="query5" value="All Brake and Aceleration CAN Signals" />-->
					<button class="btn" id="query5" type="submit">All Brake and
						Aceleration CAN Signals</button>
				</form>
				</td>
			</tr>
			<tr>
				<td>

					<form action="table1.php" method="post">
						<!--<input id="table3" type="submit" name="table3" value="Prizes" />-->
						<button id="table1" type="submit" class="btn">Prize information</button>
					</form>
				</td>
			</tr>
		</table>
	</div>

	<div style="display: flex; justify-content: center;">
		<img src="https://lh5.googleusercontent.com/bAPFMZSp-eI3d700ZQUOSFW8M81ppW-FTnW7IJukS98GWU0y6YWubddyT1kxTy6j4HG5k5-jtF2soXMEm3O_=w1922-h947-rw"
			align="middle" />
	</div>
</body>

</html>
