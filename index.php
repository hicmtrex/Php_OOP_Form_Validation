<?php

require('user_validator.php');

if (isset($_POST['submit'])) {
    //validate entries
    $validation = new UserValidator($_POST);
    $errors = $validation->validateForm();

    //save data to db


}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Form Validation</h1>
    <div class="new-user">
        <h2>Create new user</h2>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <label for="username">UserName:</label>
            <input type="text" name="username" id="username" value="<?php htmlspecialchars($_POST['username']) ?? '' ?>">
            <div class="error">
                <?php
                echo $errors['username'] ?? '' ?>
            </div>
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" value="<?php htmlspecialchars($_POST['email'])  ?? ''  ?>">
            <div class="error">
                <?php
                echo $errors['email'] ?? ''  ?>
            </div>
            <input type="submit" value="submit" name="submit">
        </form>
    </div>
</body>

</html>