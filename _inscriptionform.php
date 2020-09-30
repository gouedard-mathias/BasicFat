<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Basic-Fat inscription</title>
</head>
<body>
    <?php include("_header.php") ?>
    <form action="" class="inscription">
        <div class="user_genre">
            <label for="user_genre_male">M.</label>
            <input type="radio" id="user_genre" name="user_genre_male">

            <label for="user_genre_femele">Mme / Mlle</label>
            <input type="radio" id="user_genre" name="user_genre_femele">
        </div>
        <div>
            <label for="user-firstname"> Prénom</label>
            <input type="text" id="user-firstname" name="user-firstname" required placeholder="Prénom">
        </div>
        <div>
            <label for="user-lastname"> Nom</label>
            <input type="text" id="user-lastname" name="user-lastname" required placeholder="Nom">
        </div>
        <div>
            <label for="user_email"> Email</label>
            <input type="email" id="user_email" name="user_email" required placeholder="@">
        </div>
        <input type="date" class="input-date" name="birthday" value="" required="" data-msg-required="Une date de naissance est requise" data-msg-minage="En dessous de l'âge minimum" data-msg-mindate="Date before 01-01-1900 not allowed">
        <div>
            <label for="user_phone"> Téléphone</label>
            <input type="number" id="user_phone" name="user_phone" required>
            <div>
    </form>
</body>
<footer>
    <?php include("_footer.php") ?>
</footer>
</html>