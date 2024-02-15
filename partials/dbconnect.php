<?
$servername = "localhost";
$username = "root";
$password = "";
$database = "food";

$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if ($conn){
    echo "Connection was successful<br>";
}
else{


    die("Error". mysqli_connect_error());
}
?>