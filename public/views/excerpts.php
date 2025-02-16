<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/excerpts.css">
    <script src="https://kit.fontawesome.com/5c7f0abbc2.js" crossorigin="anonymous"></script>
    <title>EXCERPTS</title>
</head>
<body>
<div class="base-container">
    <main>
        <header>
            <div class="search-bar">
                <form>
                    <input placeholder="search excerpt">
                </form>
            </div>
            <div>
                <i class="fa-solid fa-circle-plus" style="color: #7c03b3;"></i>
                <a href="addExcerpt" class="button2">Add new excerpt</a>
                <!--<button class="button2" type="submit">Add new excerpt</button>-->
            </div>
        </header>
        <section class="excerpts">
            <?php foreach ($excerpts as $excerpt): ?>
            <div id="excerpt-xylophone">
                <img src="public/uploads/<?= $excerpt->getImage(); ?>" alt="ni ma" >
                <div>
                    <h2><?= $excerpt->getTitle(); ?> </h2>
                    <p><?= $excerpt->getInformation(); ?> </p>
                    <div class="social-section">
                        <i class="fas fa-heart"> 42</i>
                        <i class="fa-solid fa-thumbs-down"> 3</i>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <div id="excerpt-xylophone">
                <img src="public/img/Xylophone/Kodaly - Hary Janos - Suite.png" alt="ni ma">
                <div>
                    <h2>Háry János</h2>
                    <p>Suite</p>
                    <div class="social-section">
                        <i class="fas fa-heart"> 42</i>
                        <i class="fa-solid fa-thumbs-down"> 3</i>
                    </div>
                </div>
            </div>
            <div id="excerpt-xylophone">
                <img src="public/img/Xylophone/Stravinski - Ognisty Ptak.png" alt="ni ma">
                <div>
                    <h2>Igor Stravinski</h2>
                    <p>Ognisty Ptak</p>
                    <div class="social-section">
                        <i class="fas fa-heart"> 23</i>
                        <i class="fa-solid fa-thumbs-down"> 30</i>
                    </div>
                </div>
            </div>
            <div id="excerpt-xylophone">
                <img src="public/img/Xylophone/Messiaen - Ptaki egzotyczne.png" alt="ni ma">
                <div>
                    <h2>Olivier Messiaen</h2>
                    <p>Ptaki egzotyczne</p>
                    <div class="social-section">
                        <i class="fas fa-heart"> 23</i>
                        <i class="fa-solid fa-thumbs-down"> 30</i>
                    </div>
                </div>
            </div>


            <div>
                excerpt 2
            </div>
            <div>
                excerpt 3
            </div>
            <div>
                excerpt 4
            </div>
        </section>
    </main>
    <nav>
        <div id="name">OEP</div>

        <img src="public/img/logo.svg" height="200" width="200">
        <ul>
            <li>
                <a href="excerpts" class="button">excerpts</a>
                <i class="fa-solid fa-book"></i>
            </li>
            <li>
                <a href="#" class="button">users</a>
                <i class="fa-solid fa-user-group"></i>
            </li>
            <li>
                <a href="#" class="button">messages</a>
                <i class="fa-solid fa-message"></i>
            </li>
            <li>
                <a href="#" class="button">notifications</a>
                <i class="fa-solid fa-bell"></i>
            </li>
            <li>
                <a href="#" class="button">settings</a>
                <i class="fa-solid fa-sliders"></i>
            </li>
        </ul>
    </nav>
</div>
</body>