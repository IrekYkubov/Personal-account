<!DOCTYPE html>
<html lang="ru">

<head>
    <?php
    $titlePage = 'Авторизация';
    ?>
    <?php require_once 'include/head.php'; ?>
</head>

<body>
    <?php require_once 'include/header.php'; ?>
    <main class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <?php
                if ($_COOKIE['login'] == '') :
                ?>
                    <h4>Форма авторизации</h4>
                    <form action="" method="POST">
                        <label for="login">Логин</label>
                        <input type="text" name="login" id="login" class="form-control" required>

                        <label for="password">Пароль</label>
                        <input type="password" name="password" id="password" class="form-control" required>

                        <div class="alert alert-danger mt-2" id="errorBlock"></div>

                        <button type="button" id="authUser" class="btn btn-success mt-4">Войти</button>
                    </form>
                <?php
                else :
                ?>
                    <h2><?= $_COOKIE['login'] ?></h2>
                    <button type="button" id="exitBtn" class="btn btn-danger">Выйти</button>
                <?php
                endif;
                ?>
            </div>
            <?php require_once 'include/aside.php'; ?>
        </div>
    </main>

    <?php require_once 'include/footer.php'; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/auth.js"></script>
    <script src="js/exit.js"></script>
</body>

</html>