<?
$servername = 'localhost';
$username = 'root';
$dbPassword = '';
$dbname = 'Time Machine';

$conn = new mysqli($servername, $username, $dbPassword, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $login = trim($_POST["login"]);
    $password = trim($_POST["password"]);
    $confirmPassword = trim($_POST["confirmPassword"]);

    $sql = "INSERT INTO Users (Login, Password) VALUES ('$login', '$password')";

    if ($password === $confirmPassword) {
        if ($conn->query($sql) === true) {
            session_start();
            header('Location: ../html/reg/regDone.html');
            session_destroy();
        } else {
            echo "Произошла ошибка! " . $conn->error;
        }
    } else {
        header('Location: ../html/reg/regError.html');
    }
}

$conn->close();
?>