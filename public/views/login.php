<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/styl.css">
    <link rel="stylesheet" type="text/css" href="public/css/login.css">
    <title>LOGIN PAGE</title>
</head>

<body>
<div class="container">
    <h1 class="title">Orchestra Excerpts Practise</h1>
    <div class="logo">
        <img src="public/img/logo.svg" width="250" height="250">
    </div>
    <div class="login-container">
        <form class="login" action="login" method="POST">
            <div class="messages">
                <?php
                if(isset($messages)) {
                    foreach ($messages as $message) {
                        echo $message;
                    }
                }
                ?>
            </div>
            <input name="email" type="text" placeholder="email@email.com">
            <input name="password" type="password" placeholder="password">
            <button type="submit">LOGIN</button>
            <a href="register">Register</a>
        </form>
    </div>
</div>
</body>