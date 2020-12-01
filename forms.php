<html>
<body>

<h3>save form</h3>
<form action="?func=save" method="post">
    <!--    action is the place that we sending the date to ex: action="welcome.php"
        if we didn't put any thing it will send the data to the same page -->

    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">

</form>

<h3>show form</h3>
<form action="?func=show" method="post">
    <!--    action is the place that we sending the date to ex: action="welcome.php"
        if we didn't put any thing it will send the data to the same page -->

    Name: <input type="text" name="name" required><br>
    <!--    use required for not empty-->
    E-mail: <input type="email" name="email" ><br>
    <!--    use type="email" for email only filed-->
    dob:<input type="number" name="dob" min="1990" max="2020"><br>
    Gender:<input type="radio" name="gender" value="male">male<input type="radio" name="gender"
                                                                     value="female">female<br>
    <!--    select one of them only the name should be the same-->
    Fav-color:
    <input type="checkbox" name="color" value="red">red
    <input type="checkbox" name="color" value="red">green
    <input type="checkbox" name="color" value="red">blue
    <br>
    City:
    <select name="city">
        <option>ankara</option>
        <option>istanbul</option>
        <option>karabuk</option>
    </select>
    <br>
    Description:
    <br><textarea name="description" cols="30" rows="10"></textarea>
    <br>
    <input type="submit">

</form>

<?php
if ($_REQUEST["func"] == "show" and $_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"]; //get the data from the form with _POST[name]
    $email = $_POST["email"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $color = $_POST["color"];
    $city = $_POST["city"];
    $description = $_POST["description"];
    echo "name: " . $name, "<br>";
    echo "email: " . $email, "<br>";
    echo "dob: " . $dob, "<br>";
    echo "gender: " . $gender, "<br>";
    echo "fav-color: " . $color, "<br>";
    echo "city: " . $city, "<br>";
    echo "description: " . $description, "<br>";
}


?>

</body>
</html>