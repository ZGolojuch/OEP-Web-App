<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/styl.css">
    <link rel="stylesheet" type="text/css" href="public/css/login.css">

    <script type="text/javascript" src="./public/js/script.js" defer></script>
    <title>REGISTER</title>
</head>

<body>
<div class="container">
    <h1 class="title">Orchestra Excerpts Practise</h1>
    <div class="logo">
        <img src="public/img/logo.svg" alt="logo" height="250px" width="250px">
    </div>
    <div class="register-container">
        <form class="register" action="register" method="POST">
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

            <label for="instrument">Instrument:</label>
            <select name="instrument" id="instrument">
                <?php
                // Assuming $instruments is an array fetched from the database
                if (isset($instruments)) {
                    foreach ($instruments as $instrument) {
                        echo "<option value='" . htmlspecialchars($instrument, ENT_QUOTES, 'UTF-8') . "'>" . htmlspecialchars($instrument, ENT_QUOTES, 'UTF-8') . "</option>";
                    }
                }
                ?>
            </select>

            <label for="role">Role:</label>
            <select name="role" id="role">
                <?php
                // Assuming $roles is an array fetched from the database (e.g., ['student', 'professor'])
                if (isset($roles)) {
                    foreach ($roles as $role) {
                        echo "<option value='" . htmlspecialchars($role, ENT_QUOTES, 'UTF-8') . "'>" . htmlspecialchars($role, ENT_QUOTES, 'UTF-8') . "</option>";
                    }
                }
                ?>
            </select>

            <button type="submit">REGISTER</button>
            <a href="http://localhost:8080">LOGIN</a>



        </form>
    </div>
</div>
</body>


