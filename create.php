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

$sql = "CREATE TABLE `Customer` (
	Email varchar(255) PRIMARY KEY NOT NULL,
	Fname varchar(255),
    	Lname varchar(255),
	DateOfB varchar(255)
	FOREIGN KEY (GameCard) REFERENCES GameCard(GameCardID)
)";
mysql_query($sql, $con);
// INSERT DATA TO TABLE
$sql = "INSERT INTO Customer (Email , Fname, Lname, DateOfB)VALUES ('test@asu.edu', 'test', 'lol','12-3-2013')";
mysql_query($sql, $con);
$sql = "INSERT INTO Customer (Email , Fname, Lname, DateOfB) VALUES ('test2@asu.edu', 'test2', 'lol2','12-3-2014')";
mysql_query($sql, $con);
$sql = "INSERT INTO Customer (Email , Fname, Lname, DateOfB) VALUES ('test3@asu.edu', 'test3', 'lol3','12-3-2015')";
mysql_query($sql, $con);

$sql = "CREATE TABLE `Employee` (
	SSN int PRIMARY KEY NOT NULL,
	Fname varchar(255),
	Lname varchar(255),
    	EmployeeID int NOT NULL,
	DateOfB	varchar(255) NOT NULL,
	
)";
mysql_query($sql, $con);
// INSERT DATA TO TABLE
$sql = "INSERT INTO `Employee` (SSN, Fname, Lname,EmployeeID,DateOfB) VALUES (9011, 'lol1', 'ltest1',12345,'12-1-2012')";
mysql_query($sql, $con);
$sql = "INSERT INTO `Employee` (SSN, Fname, Lname,EmployeeID,DateOfB) VALUES (9012, 'lol1', 'ltest1',12345,'12-1-2012')";
mysql_query($sql, $con);
$sql = "INSERT INTO `Employee` (SSN, Fname, Lname,EmployeeID,DateOfB) VALUES (9013, 'lol1', 'ltest1',12345,'12-1-2012')";
mysql_query($sql, $con);


$sql = "CREATE TABLE `Schedule` (
	StartTime int NOT NULL,
	EndTime int NOT NULL,
	OffDay varchar(255)
	FOREIGN KEY (Employee) REFERENCES Employee(EmployeeID)
	
)";
mysql_query($sql, $con);
// INSERT DATA TO TABLE
$sql = "INSERT INTO `Schedule` (StartTime, EndTime, OffDay) VALUES (8, 19, 'Monday')";
mysql_query($sql, $con);
$sql = "INSERT INTO `Schedule` (StartTime, EndTime, OffDay) VALUES (7, 15, 'tuesday')";
mysql_query($sql, $con);
$sql = "INSERT INTO `Schedule` (StartTime, EndTime, OffDay) VALUES (0, 23, 'Thursday')";
mysql_query($sql, $con);


$sql = "CREATE TABLE `Prizes` (
	ID int PRIMARY KEY NOT NULL,
	Type varchar(255) ,
	TicketValue int ,
	DateAdded varchar(255) 
)";
// INSERT DATA TO TABLE
mysql_query($sql, $con);
$sql = "INSERT INTO `Prizes` (ID, Type, TicketValue, DateAdded) VALUES (0001,  'Stuffed Animal', 250, '8-22-2017')";
mysql_query($sql, $con);
$sql = "INSERT INTO `Prizes` (ID, Type, TicketValue, DateAdded) VALUES (0002,  'Edible', 10, '2-18-2018')";
mysql_query($sql, $con);
$sql = "INSERT INTO `Prizes` (ID,  Type, TicketValue, DateAdded) VALUES (0003,  'Electronic', 2000, '1-22-2018')";
mysql_query($sql, $con);
$sql = "INSERT INTO `Prizes` (ID, Type, TicketValue, DateAdded) VALUES (0004, 'Miscellaneous', 20, '3-05-2018')";
mysql_query($sql, $con);


$sql = "CREATE TABLE `Games` (
	GameID int PRIMARY KEY NOT NULL,	
	GameName varchar(25),
	TokenCost int ,
	MinPrize int ,
	MaxPrize int ,
)";
mysql_query($sql, $con);
// INSERT DATA TO TABLE
$sql = "INSERT INTO `Games` (GameID, GameName, TokenCost, MinPrize,MaxPrize) VALUES (691, 'lol1', 5, 10, 50)";
mysql_query($sql, $con);
$sql = "INSERT INTO `Games` (GameID, GameName, TokenCost, MinPrize,MaxPrize) VALUES (692, 'lol2', 6, 15, 70)";
mysql_query($sql, $con);
$sql = "INSERT INTO `Games` (GameID, GameName, TokenCost, MinPrize,MaxPrize) VALUES (693, 'lol3', 7, 20, 100)";
mysql_query($sql, $con);

$sql = "CREATE TABLE `GameCard` (
	GameCardID int PRIMARY KEY NOT NULL,
	Type varchar(255),
	TokenAmount int,
    	TicketAmount int,
	
)";
mysql_query($sql, $con);
// INSERT DATA TO TABLE
$sql = "INSERT INTO `GameCard` (GameCardID , Type ,TokenAmount, TicketAmount) VALUES (1234, 'Member', 1000,10000)";
mysql_query($sql, $con);
$sql = "INSERT INTO `GameCard` (GameCardID , Type ,TokenAmount, TicketAmount) VALUES (1235, 'non-Member', 10,10000)";
mysql_query($sql, $con);
$sql = "INSERT INTO `GameCard` (GameCardID , Type ,TokenAmount, TicketAmount) VALUES (1236, 'Member', 1,10)";
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
