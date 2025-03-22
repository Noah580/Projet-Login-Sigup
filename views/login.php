<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/assets/css/login.css">
</head>

<body>
    <p class="title">Page Login</p>


    <form action="index.php?page=login" id="form-login" method="post">
        <h3>Connexion</h3>

        <div class="gp">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
            <a href="" class="forgotBtn">Forgot your email</a>
        </div>

        <div class="gp">
            <label for="password">Password :</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
            <a href="" class="forgotBtn">Forgot your password</a>
        </div>

        <button type="submit">Se connecter</button>
    </form>

</body>

</html>