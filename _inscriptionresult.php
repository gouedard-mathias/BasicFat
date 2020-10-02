<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Basic-Fat inscription terminé</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <?php include("_header.php") ?>

    </header>

    <div class="container">
        <p class="title"><?php echo $_GET['user_genre']; ?> <?php echo $_GET['user-firstname']; ?> <?php echo $_GET['user-lastname']; ?></p>
        <p><?php echo $_GET['user_email']; ?></p>
        <p><?php echo $_GET['user_phone']; ?></p>
        <p>Votre inscription a bien été prise en compte</p>
    </div>

    <?php include("_footer.php") ?>
</body>
</html>