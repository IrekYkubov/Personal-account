<?php
if ($_COOKIE['login'] == '') {
    header('Location: /reg');
    exit();
}

require_once 'config.php';
$sql = 'SELECT * FROM `news` WHERE `id` = :id';
$id = $_GET['id'];
$query = $pdo->prepare($sql);
$query->execute(['id' => $id]);
$news = $query->fetch(PDO::FETCH_ASSOC);
if ($news['author'] != $_COOKIE['login']) {
    header('Location: /index');
    exit();
}

?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <?php
    $titlePage = 'Редактирование новости';
    ?>
    <?php require_once 'include/head.php'; ?>
</head>

<body>
    <?php require_once 'include/header.php'; ?>
    <main class="container mt-5">
        <div class="row">
            <div class="col-md-8">

                <h4>Редактирование новости</h4>
                <form action="" method="POST">

                    <label for="title">Идентификатор</label>
                    <input type="text" name="id" id="id" class="form-control" value="<?= $news['id']; ?>" disabled>

                    <label for="title">Зоголовок</label>
                    <input type="text" name="title" id="title" class="form-control" value="<?= $news['title']; ?>" required>

                    <label for="intro">Интро новости</label>
                    <textarea name="intro" id="intro" class="form-control" required><?= $news['intro']; ?></textarea>

                    <label for="text">Текст новости</label>
                    <textarea name="text" id="text" class="form-control" required><?= $news['text']; ?>"</textarea>


                    <div class="alert alert-danger mt-2" id="errorBlock"></div>

                    <button type="button" id="updateNews" class="btn btn-success mt-4">Редактировать</button>
                </form>
            </div>
            <?php require_once 'include/aside.php'; ?>
        </div>
    </main>

    <?php require_once 'include/footer.php'; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/update.js"></script>
</body>

</html>