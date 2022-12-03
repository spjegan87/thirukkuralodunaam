 <?php
$servername ="localhost";
	$username = "aptechrjpm";
	#$pwd = "";
	$password = "Jegan53426*";
// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?> 