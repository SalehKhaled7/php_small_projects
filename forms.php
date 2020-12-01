<html>
<body>
<h3>check database connection</h3>
<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $db = new PDO("mysql:host=$servername;dbname=hotel_reservation", $username, $password);
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>



<h3>show form</h3>
<form action="?func=save" method="post">
    <!--    action is the place that we sending the date to ex: action="welcome.php"
        if we didn't put any thing it will send the data to the same page -->
    Name: <input type="text" name="name" required><br>
    Star:<input type="number" name="star" min="1" max="5"><br>
    City: <input type="text" name="city" required><br>
    <input type="submit">
</form>


<?php
if (isset($_REQUEST["func"])  and $_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $star = $_POST["star"];
    $city = $_POST["city"];

    echo "name: " . $name, "<br>";
    echo "star: " . $star, "<br>";
    echo "city: " . $city, "<br>";

}
?>

<?php
//add to data base
if (isset($_REQUEST["func"])=='save'  and $_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $star = $_POST["star"];
    $city = $_POST["city"];
    $sql="INSERT INTO hotel (name,star,city) VALUES ('$name',$star,'$city')";
    $db->exec($sql);
    echo "New record created successfully";

}
?>
<?php
//list to data base
    $sql = "SELECT * FROM hotel";
    foreach ($db->query($sql) as $row){
        echo $row['name']," ",$row['star']," ",$row['city'],"<br>";


}
?>
<?php
//delete from data base
if (isset($_REQUEST["func"])=='delete'  and $_SERVER["REQUEST_METHOD"] == "POST") {
    $id=$_REQUEST['id'];
    $sql="DELETE FROM hotel WHERE id=$id";
    $db->exec($sql);
    header("location: ?func=delete");

}
?>


</body>
</html>