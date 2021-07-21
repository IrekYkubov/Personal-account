<?php
if ($_COOKIE['login'] == '') {
    header('Location: /reg');
    exit();
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <?php
    $titlePage = 'Дабавление новости';
    ?>
    <?php require_once 'include/head.php'; ?>
</head>

<body>
    <?php require_once 'include/header.php'; ?>
    <main class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <h4>Дабавление новости</h4>
                <form action="" method="POST">

                    <label for="title">Зоголовок</label>
                    <input type="text" name="title" id="title" class="form-control" required>

                    <label for="intro">Интро новости</label>
                    <textarea name="intro" id="intro" class="form-control" required></textarea>

                    <label for="text">Текст новости</label>
                    <textarea name="text" id="text" class="form-control" required></textarea>


                    <div class="alert alert-danger mt-2" id="errorBlock"></div>

                    <button type="button" id="addNews" class="btn btn-success mt-4">Дабавить</button>
                </form>
            </div>
            <?php require_once 'include/aside.php'; ?>
        </div>
    </main>

    <?php require_once 'include/footer.php'; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/addNews.js"></script>
</body>

</html>