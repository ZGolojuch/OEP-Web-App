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
                <a href="#" class="button2">Add new excerpt</a>
            </div>
        </header>
        <section class="excerpts-form">
            <h1>UPLOAD</h1>
            <form action="addExcerpt" method="POST" enctype="multipart/form-data">
                <div class="messages">
                    <?php
                    if(isset($messages)) {
                        foreach ($messages as $message) {
                            echo $message;
                        }
                    }
                    ?>
                </div>
                <input name="title" type="text" placeholder="title">
                <textarea name="description" rows="5" placeholder="description"></textarea>

                <input type="file" name="file">
                <button type="submit">send</button>
            </form>
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