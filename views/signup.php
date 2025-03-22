<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/assets/css/signup.css">
</head>
<body>
    <p class="title">Page Register</p>

    <form action="controller/handleRegister.php" id="form-register" method="post">
        <h3>S'inscrire</h3>

        <div class="gp">
            <label for="email">Firstname :</label>
            <input type="text" id="Firstname" name="Firstname" placeholder="Enter your Firstname" required>
        </div>

        <div class="gp">
            <label for="email">Name :</label>
            <input type="text" id="Name" name="Name" placeholder="Enter your Name" required>
        </div>

        <div class="gp">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>

        <div class="gp">
            <label for="password">Password :</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
        </div>

        <button type="submit">S'inscire</button>
    </form>
</body>
</html>