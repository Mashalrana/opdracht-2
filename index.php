<?php
$variabele1 = 10;
$variabele2 = 10;

if($variabele1 == $variabele2) {
    echo "De twee waarden zijn gelijk";
}

$variabele1 = 10;
$variabele2 = 10;

if($variabele1 != $variabele2) {
    echo "De twee waarden zijn ongelijk";
} else {
    echo "De twee waarden zijn gelijk";
}

$variabele1 = 10;
$variabele2 = 10;

if($variabele1 == $variabele2) {
    echo "De twee waarden zijn gelijk";
} else {
    echo "De twee waarden zijn ongelijk";
}
?>




<form method="POST">
    <label for="username">Gebruikersnaam:</label>
    <input type="text" id="username" name="username"><br>

    <label for="password">Wachtwoord:</label>
    <input type="password" id="password" name="password"><br>

    <button type="submit" name="submit">Versturen</button>
</form>

<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo "De ingevoerde gebruikersnaam is: " . $username . "<br>";
    echo "Het ingevoerde wachtwoord is: " . $password;
}
?>