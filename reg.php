<!DOCTYPE html>
<html lang="ru">

<head>
    <?php
    $titlePage = 'Регистрация';
    ?>
    <?php require_once 'include/head.php'; ?>
</head>

<body>
    <?php require_once 'include/header.php'; ?>
    <main class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <h4>Форма регистрации</h4>
                <form action="" method="POST">
                    <label for="username">Ваше имя</label>
                    <input type="text" name="username" id="username" class="form-control" required>

                    <label for="login">Логин</label>
                    <input type="text" name="login" id="login" class="form-control" required>

                    <label for="email">Ваше email</label>
                    <input type="email" name="email" id="email" class="form-control" required>

                    <label for="password">Пароль</label>
                    <input type="password" name="password" id="password" class="form-control" required>

                    <label for="password2">Повторите пороль</label>
                    <input type="password" name="password2" id="password2" class="form-control" required>

                    <div class="alert alert-danger mt-2" id="errorBlock"></div>

                    <button type="button" id="regUser" class="btn btn-success mt-4">Зарегестрироваться</button>
                </form>
            </div>
            <?php require_once 'include/aside.php'; ?>
        </div>
    </main>

    <?php require_once 'include/footer.php'; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/reg.js"></script>
</body>

</html>