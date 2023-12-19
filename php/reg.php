<!-- <!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../regCSS/regStyle.css">
    <link rel="stylesheet" href="../../regCSS/regForm.css">
    <link rel="icon" type="image/png" href="../../img/Logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация аккаунта</title>
</head>
<body>
    <div id="BackI"></div>

    <main>
        <div class="wrapper">
            <h1>Давайте создадим<br> ваш аккаунт!</h1>
    
            <form action="../../php/reg.php" method="post">
                <input type="text" name="login" placeholder="Логин" class="email" required>

                <input type="password" name="password" placeholder="Придумайте пароль" class="password" required>

                <input type="password" name="confirmPassword" placeholder="Подтвердите пароль" class="confirm-password" required>

                <button type="submit" class="enter-button">Зарегистрироваться</button>
            </form>
            
            <div class="have-account">
                <p>Уже есть аккаунт? <a href="../login/login.html">Войдите тут</a></p>
            </div>
        </div>

    </main>
</body>
</html> -->
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
        echo "Пароли не совпадают!";
    }
}

$conn->close();

?>