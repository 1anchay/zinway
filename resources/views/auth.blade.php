<?php
session_start();
require_once 'config/db.php';

function checkUser($email, $password) {
    global $pdo;

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        return $user;
    }

    return false;
}

// Обработка форм
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['button_auth'])) {
        // Авторизация
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = checkUser($email, $password);
        if ($user) {
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            header('Location: dashboard.php');
        } else {
            echo "Неверный логин или пароль.";
        }
    } elseif (isset($_POST['button_register'])) {
        // Регистрация
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_confirmation = $_POST['password_confirmation'];

        if ($password !== $password_confirmation) {
            echo "Пароли не совпадают!";
        } else {
            $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
            $stmt->execute([$email]);
            $existingUser = $stmt->fetch();

            if ($existingUser) {
                echo "Пользователь с таким email уже существует!";
            } else {
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                $stmt = $pdo->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
                $stmt->execute([$name, $email, $hashedPassword]);

                echo "Регистрация прошла успешно!";
                header('Location: login.php');
            }
        }
    }
}
?>

<!-- HTML форма для регистрации или авторизации в зависимости от параметра action -->
<?php if ($_GET['action'] === 'register'): ?>
    <!-- Форма регистрации -->
    <form action="auth.php" method="post">
        <input type="text" name="name" placeholder="Имя" required>
        <input type="text" name="email" placeholder="E-mail" required>
        <input type="password" name="password" placeholder="Пароль" required>
        <input type="password" name="password_confirmation" placeholder="Подтвердите пароль" required>
        <button type="submit" name="button_register">Зарегистрироваться</button>
    </form>
<?php else: ?>
    <!-- Форма авторизации -->
    <form action="auth.php" method="post">
        <input type="text" name="email" placeholder="E-mail" required>
        <input type="password" name="password" placeholder="Пароль" required>
        <button type="submit" name="button_auth">Войти</button>
    </form>
<?php endif; ?>
