<?PHP
// Localhost

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "moonshot";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
//mysqli_select_db("takgalac_vikkaDB");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
