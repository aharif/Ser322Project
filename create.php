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
$sql = "CREATE TABLE `Connector` (
	ConnectorID int PRIMARY KEY NOT NULL,
	Controller int NOT NULL,
	Manfacturer varchar(255) NOT NULL,
	`Pin Number` int NOT NULL,
	`Pin Type` varchar(255) NOT NULL,
	FOREIGN KEY (Controller) REFERENCES Controller(ControllerID)
)";
mysql_query($sql, $con);
// INSERT DATA TO TABLE
$sql = "INSERT INTO Connector (ConnectorID, Controller, Manfacturer, `Pin Number`, `Pin Type`) VALUES (1, 1, 'Tyco',1315, 'male')";
mysql_query($sql, $con);
$sql = "INSERT INTO Connector (ConnectorID, Controller, Manfacturer, `Pin Number`, `Pin Type`) VALUES (2, 1, 'Delphi',1234, 'female')";
mysql_query($sql, $con);
$sql = "INSERT INTO Connector (ConnectorID, Controller, Manfacturer, `Pin Number`, `Pin Type`) VALUES (3, 1, 'Yazaki',53252, 'female')";
mysql_query($sql, $con);
$sql = "INSERT INTO Connector (ConnectorID, Controller, Manfacturer, `Pin Number`, `Pin Type`) VALUES (4, 1, 'Sumitomo',36346, 'female')";
mysql_query($sql, $con);
$sql = "INSERT INTO Connector (ConnectorID, Controller, Manfacturer, `Pin Number`, `Pin Type`) VALUES (5, 1, 'Tyco',6364, 'male')";
mysql_query($sql, $con);
$sql = "INSERT INTO Connector (ConnectorID, Controller, Manfacturer, `Pin Number`, `Pin Type`) VALUES (6, 1, 'AMP',6346, 'male')";
mysql_query($sql, $con);


// Create Car Component Table
$sql = "CREATE TABLE `Car Component` (
	ComponentID int PRIMARY KEY NOT NULL,
	Controller int NOT NULL,
	Connector int NOT NULL,
	Name varchar(255) NOT NULL,
	FOREIGN KEY (Controller) REFERENCES Controller(ControllerID),
	FOREIGN KEY (Connector) REFERENCES Connector(ConnectorID)
	
)";
mysql_query($sql, $con);
// INSERT DATA TO TABLE
$sql = "INSERT INTO `Car Component` (ComponentID, Controller, Connector, Name) VALUES (1, 1, 1, 'WindowSwitchpack')";
mysql_query($sql, $con);
$sql = "INSERT INTO `Car Component` (ComponentID, Controller, Connector, Name) VALUES (2, 1, 2, 'Transmission')";
mysql_query($sql, $con);
$sql = "INSERT INTO `Car Component` (ComponentID, Controller, Connector, Name) VALUES (3, 1, 3, 'AcceleratorPedal')";
mysql_query($sql, $con);
$sql = "INSERT INTO `Car Component` (ComponentID, Controller, Connector, Name) VALUES (4, 5, 5, 'BrakePedal')";
mysql_query($sql, $con);

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
