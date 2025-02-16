<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <script type="text/javascript" src="./public/js/script.js" defer></script>
    <title>REGISTER</title>
</head>

<body>
<div class="container">
    <h1 class="title">Orchestra Excerpts Practise</h1>
    <div class="logo">
        <img src="public/img/logo.svg" alt="logo" height="250px" width="250px">
    </div>
    <div class="login-container">
        <form class="login" action="register" method="POST">
            <div class="messages">
                <?php
                if(isset($messages)){
                    foreach($messages as $message) {
                        echo $message;
                    }
                }
                ?>
            </div>
            <input name="email" type="text" placeholder="email@email.com">
            <input name="password" type="password" placeholder="password">
            <input name="confirmedPassword" type="password" placeholder="confirm password">
            <input name="name" type="text" placeholder="name">
            <input name="surname" type="text" placeholder="surname">
            <input name="phone" type="text" placeholder="phone">
            <button type="submit">REGISTER</button>
        </form>
    </div>
</div>
</body>