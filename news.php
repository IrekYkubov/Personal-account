<!DOCTYPE html>
<html lang="ru">

<head>
    <?
    require_once 'config.php';
    $sql = 'SELECT * FROM `news` WHERE `id` = :id';
    $id = $_GET['id'];
    $query = $pdo->prepare($sql);
    $query->execute(['id' => $id]);
    $news = $query->fetch(PDO::FETCH_ASSOC);

    $titlePage = $news['title'];
    ?>
    <?php require_once 'include/head.php'; ?>
</head>

<body>
    <?php require_once 'include/header.php'; ?>
    <main class="container mt-5">
        <div class="row">
            <div class="col-md-9">
                <div class="card mb-3">
                    <div class="card-header">
                        Автор: <?= $news['author']; ?> <br>
                        Дата публикации: <?php echo $today = date("d-m-Y", $news['date']); ?> <br>
                        Время публикации: <?php echo $time = date("H:i:s", $news['date']); ?>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?= $news['title']; ?></h5>
                        <p class="card-text"><?= $news['intro']; ?></p>
                        <p class="card-text"><?= $news['text']; ?></p>
                        <a href="/" class="btn btn-primary">На главную</a>
                        <?php
                        if ($_COOKIE['login'] == $news['author']) :
                        ?>
                            <a href="/update?id=<?= $id ?>" class="btn btn-primary">Редактировать статью</a>
                        <?php
                        endif;
                        ?>
                    </div>
                </div>
            </div>
            <?php require_once 'include/aside.php'; ?>
        </div>
    </main>

    <?php require_once 'include/footer.php'; ?>
</body>

</html>