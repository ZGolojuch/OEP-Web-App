<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/styl.css">
<!--    <link rel="stylesheet" type="text/css" href="public/css/excerpt.css">-->
    <script src="https://kit.fontawesome.com/5c7f0abbc2.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="public/js/search.js" defer></script>

    <script type="text/javascript" src="public/js/menu.js" defer></script>

    <title>EXCERPTS</title>
</head>

<body>
<div class="base-container">
    <div class="hamburger">
        <nav>
            <div id="name">OEP</div>
            <img src="public/img/logo.svg" height="200" width="200">
            <ul>
                <li class="search-bar">
                    <input placeholder="search excerpt">
                </li>
                <li>
                    <a href="addExcerpt" class="button2">Add new excerpt</a>
                    <i class="fa-solid fa-circle-plus" style="color: #ffffff;"></i>
                </li>
                <li>
                    <a href="excerpts" class="button2">All excerpts</a>
                    <i class="fa-solid fa-book"></i>
                </li>
                <li>
                    <a href="#" class="button2">Favourites</a>
                    <i class="fa-solid fa-heart"></i>
                </li>
                <li>
                    <a href="#" class="button2">Users</a>
                    <i class="fa-solid fa-user-group"></i>
                </li>
                <li>
                    <a href="#" class="button2">Settings</a>
                    <i class="fa-solid fa-sliders"></i>
                </li>
                <li>
                    <a href="http://localhost:8080" class="button2">Log out</a>
                    <i class="fa-solid fa-right-from-bracket"></i>
                </li>
            </ul>

            <ul class="mobile-icons">
                <i class="fa-solid fa-bars"></i>
            </ul>
        </nav>
    </div>

    <main>
        <div class="cards">
            <?php foreach ($excerpts as $excerpt): ?>
            <div class="card">
                <img src="public/uploads/<?= $excerpt->getImage(); ?>" height="300px" width="300px" alt="ni ma" >
                <h2><?= $excerpt->getTitle(); ?> </h2>
                <p><?= $excerpt->getInformation(); ?> </p>
                <i class="fas fa-heart"><?= $excerpt->getLikes(); ?></i>
                <i class="fa-solid fa-thumbs-down"><?= $excerpt->getDislikes(); ?></i>
            </div>
            <?php endforeach; ?>
        </div>




    </main>
</div>
</body>



<!--TODO zobaczyć czy to jest dobrze po modyfikacjach-->
<template id="excerpt-template">
    <div>
        <img src="" alt="ni ma" >
        <div>
            <h2>title</h2>
            <p>description</p>
            <div class="social-section">
                <i class="fas fa-heart"> 0</i>
                <i class="fa-solid fa-thumbs-down"> 0</i>
            </div>
        </div>
    </div>
</template>