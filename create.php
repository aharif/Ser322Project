<html>
<head>
</head>

<body>

<?php
$con = @mysql_connect("localhost", "root", "");
if (! $con) {
    die("Cannot connect: " . mysql_error());
}
echo "<center><h1>NWNS Arcade Database for SER 322</h1></center> <hr />";

// DROP DATABASE

$sql = "DROP Arcade Database";
mysql_query($sql, $con);

// CREATE DATABASE
$sql = "CREATE Arcade Database";
if (mysql_query($sql, $con)) {
    echo "<h1>Database created successfully.</h1>";
} else {
    echo "<h1>Database already created.</h1> <br/>";
}

mysql_select_db("Arcades", $con);


//SHAREEF Customer
// Create Connector Table
$sql = "CREATE TABLE `Customer` (
	CustomerID int PRIMARY KEY NOT NULL,
	Fname varchar(255) NOT NULL,
    Lname varchar(255) NOT NULL,
    Email varchar(255) NOT NULL,
	MemberType varchar(255) NOT NULL,
)";
mysql_query($sql, $con);
// INSERT DATA TO TABLE
$sql = "INSERT INTO Customer (CustomerID, Fname, Lname, Email, MemberType) VALUES (001, 'test', 'lol','test@asu.edu', 'Premium')";
mysql_query($sql, $con);
$sql = "INSERT INTO Customer (CustomerID, Fname, Lname, Email, MemberType) VALUES (002, 'test2', 'lol','test2@asu.edu', 'Regular')";
mysql_query($sql, $con);
$sql = "INSERT INTO Customer (CustomerID, Fname, Lname, Email, MemberType) VALUES (003, 'test3', 'lol','test3@asu.edu', 'NonMember')";
mysql_query($sql, $con);



// Create Car Component Table
$sql = "CREATE TABLE `Employee` (
	EmployeeID int PRIMARY KEY NOT NULL,
	Fname int NOT NULL,
	Lname int NOT NULL,
    FOREIGN KEY (Schedule) References Schedule(EmployeeID)
	
)";
mysql_query($sql, $con);
// INSERT DATA TO TABLE
$sql = "INSERT INTO `Employee` (EmployeeID, Fname, Lname) VALUES (901, 'lol1', 'ltest1')";
mysql_query($sql, $con);
$sql = "INSERT INTO `Employee` (EmployeeID, Fname, Lname) VALUES (902, 'lol2', 'ltest2')";
mysql_query($sql, $con);
$sql = "INSERT INTO `Employee` (EmployeeID, Fname, Lname) VALUES (903, 'lol3', 'ltest3')";
mysql_query($sql, $con);


$sql = "CREATE TABLE `Schedule` (
	EmployeeID int PRIMARY KEY NOT NULL,
	StartTime int NOT NULL,
	EndTime int NOT NULL,
	OffDay varchar(255)
	
)";
mysql_query($sql, $con);
// INSERT DATA TO TABLE
$sql = "INSERT INTO `Schedule` (EmployeeID, StartTime, EndTime, OffDay) VALUES (901, 8, 21, 'Monday')";
mysql_query($sql, $con);
$sql = "INSERT INTO `Schedule` (EmployeeID, StartTime, EndTime, OffDay) VALUES (901, 7, 15, 'tuesday')";
mysql_query($sql, $con);
$sql = "INSERT INTO `Schedule` (EmployeeID, StartTime, EndTime, OffDay) VALUES (901, 0, 23, 'Thursday')";
mysql_query($sql, $con);



// Create Car Table
$sql = "CREATE TABLE `Prizes` (
	ID int PRIMARY KEY NOT NULL,
	Name varchar(255) NOT NULL,
	Type varchar(255) NOT NULL,
	TicketValue int NOT NULL,
	DateAdded varchar(255) NOT NULL
)";
// INSERT DATA TO TABLE
mysql_query($sql, $con);
$sql = "INSERT INTO `Prizes` (ID, Name, Type, TicketValue, DateAdded) VALUES (0001, 'Teddy', 'Stuffed Animal', 250, '8-22-2017')";
mysql_query($sql, $con);
$sql = "INSERT INTO `Prizes` (ID, Name, Type, TicketValue, DateAdded) VALUES (0002, 'Lolipop', 'Edible', 10, '2-18-2018')";
mysql_query($sql, $con);
$sql = "INSERT INTO `Prizes` (ID, Name, Type, TicketValue, DateAdded) VALUES (0003, 'RC hepicopter', 'Electronic', 2000, '1-22-2018')";
mysql_query($sql, $con);
$sql = "INSERT INTO `Prizes` (ID, Name, Type, TicketValue, DateAdded) VALUES (0004, 'Sticky Hand', 'Miscellaneous', 20, '3-05-2018')";
mysql_query($sql, $con);
$sql = "INSERT INTO `Prizes` (ID, Name, Type, TicketValue, DateAdded) VALUES (0005, 'NWNS Tshirt', 'Clothing', 500, '4-05-2018')";
mysql_query($sql, $con);
$sql = "INSERT INTO `Prizes` (ID, Name, Type, TicketValue, DateAdded) VALUES (0006, 'Sour Straws', 'Edible', 40, '3-27-2018')";


// Create CAN Signals Table
$sql = "CREATE TABLE `Games` (
	GameName varchar(25) PRIMARY KEY NOT NULL,
	GameID int NOT NULL,
	TokenCost int NOT NULL,
	MinPrize int NOT NULL,
	MaxPrize int NOT NULL,
)";
mysql_query($sql, $con);
// INSERT DATA TO TABLE
$sql = "INSERT INTO `Games` (GameName, GameID, TokenCost, MinPrize,MaxPrize) VALUES ('Lol', 691, 5, 10, 50)";
mysql_query($sql, $con);
$sql = "INSERT INTO `Games` (GameName, GameID, TokenCost, MinPrize,MaxPrize) VALUES ('Lol1', 693, 6, 15, 70)";
mysql_query($sql, $con);
$sql = "INSERT INTO `Games` (GameName, GameID, TokenCost, MinPrize,MaxPrize) VALUES ('Lol2', 694, 7, 20, 100)";
mysql_query($sql, $con);


// Create CAN Signals Table
$sql = "CREATE TABLE `GameCard` (
	Type varchar(25) PRIMARY KEY NOT NULL,
	TokenAmount int NOT NULL,
    TicketAmount int NOT NULL,
	FOREIGN KEY (Customer) REFERENCES Customer(CustomerID)
)";
mysql_query($sql, $con);
// INSERT DATA TO TABLE
$sql = "INSERT INTO `GameCard` (Type, TokenAmount, TicketAmount) VALUES ('Regular', '100', '1000')";
mysql_query($sql, $con);
$sql = "INSERT INTO `GameCard` (Type, TokenAmount, TicketAmount) VALUES ('non-member', '0', '0')";
mysql_query($sql, $con);
$sql = "INSERT INTO `GameCard` (Type, TokenAmount, TicketAmount) VALUES ('Premium', '100', '10000')";
mysql_query($sql, $con);


echo "<p>";
echo "<form action=home.php method=post>";
echo "<input type=submit name=home value=Home />";
echo "</form>";
echo "</p>";

mysql_close($con);

?>

</body>

</html>
