<!DOCTYPE html>
<html lang="ru">

<head>
    <?php
    $titlePage = 'Главная - лента';
    ?>
    <?php require_once 'include/head.php'; ?>
</head>

<body>
    <?php require_once 'include/header.php'; ?>
    <main class="container mt-5">
        <div class="row">
            <div class="col-md-9">
                <?php
                require_once 'config.php';
                $sql = 'SELECT * FROM `news` ORDER BY `date` DESC';
                $query = $pdo->query($sql);
                $news = $query->fetchAll(PDO::FETCH_ASSOC);
                ?>
                <?php foreach ($news as $newsAll) { ?>
                    <div class="card mb-3">
                        <div class="card-header">
                            Автор: <?= $newsAll['author']; ?>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?= $newsAll['title']; ?></h5>
                            <p class="card-text"><?= $newsAll['intro']; ?></p>
                            <a href="/news?id=<?= $newsAll['id']; ?>" class="btn btn-primary">Прочитать больше</a>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <?php require_once 'include/aside.php'; ?>
        </div>
    </main>

    <?php require_once 'include/footer.php'; ?>
</body>

</html>