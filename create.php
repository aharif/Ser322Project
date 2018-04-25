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
// Create Customer Table
$sql = "CREATE TABLE `Customer` (
	CustomerEmail varchar(255) PRIMARY KEY NOT NULL,
	Fname varchar(255) NOT NULL,
	Lname varchar(255) NOT NULL,
	DOB varchar(255) NOT NULL,
	
	//FOREIGN KEY (Controller) REFERENCES Controller(ControllerID)
)";
// INSERT DATA TO TABLE
mysql_query($sql, $con);
$sql = "INSERT INTO Customer (CustomerEmail, Fname, Lname, DOB) VALUES ('bobby@yahoo.com', 'Bobby', 'Johnson','06-02-1999')";
mysql_query($sql, $con);
$sql = "INSERT INTO Customer (CustomerEmail, Fname, Lname, DOB) VALUES ('Terry@yahoo.com', 'Terry', 'Brown','01-28-1992')";
mysql_query($sql, $con);
$sql = "INSERT INTO Customer (CustomerEmail, Fname, Lname, DOB) VALUES ('bobby@yahoo.com', 'Bobby', 'Johnson','06-02-1999')";
mysql_query($sql, $con);
$sql = "INSERT INTO Customer (CustomerEmail, Fname, Lname, DOB) VALUES ('Terry@yahoo.com', 'Terry', 'Brown','01-28-1992')";





// Create Employee Table
$sql = "CREATE TABLE `Employee` (
	EmployeeID int PRIMARY KEY NOT NULL,
	Fname varchar(255) NOT NULL,
	Lname varchar(255) NOT NULL,
	Sex varchar(255) NOT NULL,
	DOB varchar(255) NOT NULL,
	//FOREIGN KEY (Controller) REFERENCES Controller(ControllerID),
	//FOREIGN KEY (Connector) REFERENCES Connector(ConnectorID)
	
)";
// INSERT DATA TO TABLE
mysql_query($sql, $con);
$sql = "INSERT INTO `Car Component` (EmployeeID, Fname, Lname, Sex, DOB) VALUES (1001, Ron, Stoppable, 'Male', '10-02-1998')";
mysql_query($sql, $con);
$sql = "INSERT INTO `Car Component` (EmployeeID, Fname, Lname, Sex, DOB) VALUES (1002, Kim, Possible, 'Female', '8-18-1998')";
mysql_query($sql, $con);
$sql = "INSERT INTO `Car Component` (EmployeeID, Fname, Lname, Sex, DOB) VALUES (1003, Lizzie, Maguire, 'Female', '3-26-1995')";
mysql_query($sql, $con);
$sql = "INSERT INTO `Car Component` (EmployeeID, Fname, Lname, Sex, DOB) VALUES (1004, Raven, Baxter, 'Female', '12-10-1995')";
mysql_query($sql, $con);
$sql = "INSERT INTO `Car Component` (EmployeeID, Fname, Lname, Sex, DOB) VALUES (1005, Phil, Diffy, 'Male', '11-05-2121')";



//Shareef Employee
// Create Controller Table
$sql = "CREATE TABLE `Prize` (
	ControllerID int PRIMARY KEY NOT NULL,
	CarID int NOT NULL,
	Name varchar(255) NOT NULL,
	Supplier varchar(255)
	
)";
mysql_query($sql, $con);
// INSERT DATA TO TABLE
$sql = "INSERT INTO `Controller` (ControllerID, CarID, Name, Supplier) VALUES (1, 8, 'FrontController', 'Bosch')";
mysql_query($sql, $con);
$sql = "INSERT INTO `Controller` (ControllerID, CarID, Name, Supplier) VALUES (2, 8, 'Entertainment', 'Continental')";
mysql_query($sql, $con);
$sql = "INSERT INTO `Controller` (ControllerID, CarID, Name, Supplier) VALUES (3, 8, 'Powertrain', 'Delphi')";
mysql_query($sql, $con);
$sql = "INSERT INTO `Controller` (ControllerID, CarID, Name, Supplier) VALUES (4, 8, 'BodyControls', 'GuysBasement')";
mysql_query($sql, $con);
$sql = "INSERT INTO `Controller` (ControllerID, CarID, Name, Supplier) VALUES (5, 8, 'BrakeControlModule', 'Bosch')";
mysql_query($sql, $con);
$sql = "INSERT INTO `Controller` (ControllerID, CarID, Name, Supplier) VALUES (6, 8, 'BatteryManagent', 'Continental')";
mysql_query($sql, $con);
$sql = "INSERT INTO `Controller` (ControllerID, CarID, Name, Supplier) VALUES (7, 8, 'Fluids', 'Continental')";
mysql_query($sql, $con);


//Shareef Prizes
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



//Abdul Game Machine
// Create CAN Signals Table
$sql = "CREATE TABLE `CAN Signals` (
	`Address` varchar(25) PRIMARY KEY NOT NULL,
	Controller int NOT NULL,
	Name varchar(255) NOT NULL,
	`Units` varchar(255) NOT NULL,
	FOREIGN KEY (Controller) REFERENCES Controller(ControllerID)
)";
mysql_query($sql, $con);
// INSERT DATA TO TABLE
$sql = "INSERT INTO `CAN Signals` (Address, Controller, Name, Units) VALUES ('0x010', 1, 'Accel_Pedal_Status', 'Boolean')";
mysql_query($sql, $con);
$sql = "INSERT INTO `CAN Signals` (Address, Controller, Name, Units) VALUES ('0x011', 1, 'Accel_Pedal_Position', 'Radians')";
mysql_query($sql, $con);
$sql = "INSERT INTO `CAN Signals` (Address, Controller, Name, Units) VALUES ('0x012', 1, 'Acceleration', 'MPH')";
mysql_query($sql, $con);
$sql = "INSERT INTO `CAN Signals` (Address, Controller, Name, Units) VALUES ('0x310', 2, 'Brakes_Depressed', 'Boolean')";
mysql_query($sql, $con);
$sql = "INSERT INTO `CAN Signals` (Address, Controller, Name, Units) VALUES ('0x311', 2, 'Brake_Pedal_Position', 'Radians')";
mysql_query($sql, $con);

//Abdul Schedule
// Create CAN Signals Table
$sql = "CREATE TABLE `CAN Signals` (
	`Address` varchar(25) PRIMARY KEY NOT NULL,
	Controller int NOT NULL,
	Name varchar(255) NOT NULL,
	`Units` varchar(255) NOT NULL,
	FOREIGN KEY (Controller) REFERENCES Controller(ControllerID)
)";
mysql_query($sql, $con);
// INSERT DATA TO TABLE
$sql = "INSERT INTO `CAN Signals` (Address, Controller, Name, Units) VALUES ('0x010', 1, 'Accel_Pedal_Status', 'Boolean')";
mysql_query($sql, $con);
$sql = "INSERT INTO `CAN Signals` (Address, Controller, Name, Units) VALUES ('0x011', 1, 'Accel_Pedal_Position', 'Radians')";
mysql_query($sql, $con);
$sql = "INSERT INTO `CAN Signals` (Address, Controller, Name, Units) VALUES ('0x012', 1, 'Acceleration', 'MPH')";
mysql_query($sql, $con);
$sql = "INSERT INTO `CAN Signals` (Address, Controller, Name, Units) VALUES ('0x310', 2, 'Brakes_Depressed', 'Boolean')";
mysql_query($sql, $con);
$sql = "INSERT INTO `CAN Signals` (Address, Controller, Name, Units) VALUES ('0x311', 2, 'Brake_Pedal_Position', 'Radians')";
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
