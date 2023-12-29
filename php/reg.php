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

    $query = "SELECT * FROM Users WHERE Login = '$login'";
    $user = mysqli_fetch_assoc($conn->query($query));

    $sql = "INSERT INTO Users (Login, Password) VALUES ('$login', '$password')";
    if (empty($user)) {
       if ($password === $confirmPassword) {
            if ($conn->query($sql) === true) {
                session_start();
                $_SESSION['login'] = $login;
                header('Location: index.php');
                exit();
            } else {
                echo "Произошла ошибка! " . $conn->error;
            }
        } else {
            header('Location: ../html/reg/regErrorPass.html');
            exit();
        }
    } else {
        header('Location: ../html/reg/regErrorUser.html');
        exit();
    }
    
}

$conn->close();
?>