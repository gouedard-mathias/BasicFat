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

    <div class="inscription_result">
        <h3 class="title_inscription_result"> THANKS ! </h3>
        <p class="p_result">Merci pour ton inscription <?php echo $_GET['user-firstname']; ?> <?php echo $_GET['user-lastname']; ?> !! <br>
            Tu n'as plus qu'à venir à la salle pour finaliser ton inscription et commencer ton training ! &#128170 </p>

    </div>

    <div class="div_img_result">
        <img  src= "https://i.postimg.cc/bJt0CxGw/thanks-img.jpg" alt="photo d'un homme qui tiens un burger" class="img_result">
    </div>

</body>
</html>