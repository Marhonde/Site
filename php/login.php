<?

$servername = 'localhost';
$username = 'root';
$dbPassword = '';
$dbase = 'Time Machine';

$conn = new mysqli($servername, $username, $dbPassword, $dbase);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $login = trim($_POST["login"]);
    $password = trim($_POST["password"]);

    $sql = "SELECT * FROM Users WHERE Login = '$login' AND Password = '$password'";
    $result = $conn->query($sql);

    if (!$result) {
        die("Query failed: " . $conn->error);
    }

    if ($result->num_rows > 0) {
        session_start();
        $_SESSION['login'] = $login;
        header('Location: ../html/login/logDone.html');
        exit();
    } else {
        header('Location: ../html/login/logError.html');
        exit();
    }
}

$conn->close();

?>