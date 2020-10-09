<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Basic-Fat Inscription</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <?php include("_header.php") ?>
    </header>

    <div class="div_inscription">

        <div>
            <img class="img_inscription" alt="fitness woman" src="img/inscription_img.jpg">
        </div>

        <div>
            <form class="form_inscription" action="_inscriptionresult.php" >
                <fieldset class="fieldset_inscription">
                    <legend class="inscription_legend"><h3>Inscris-toi !</h3></legend>

                    <select class="user_genre" id="user_genre">
                        <option>M.</option>
                        <option>Mme / Mlle</option>
                    </select>

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

                    <div>
                        <label for="input-date">Date de naissance</label>
                        <input type="date" id="input-date" name="birthday" value="" required="" data-msg-required="Une date de naissance est requise" data-msg-minage="En dessous de l'âge minimum" data-msg-mindate="Date before 01-01-1900 not allowed">
                    </div>

                    <div>
                        <label for="user_phone"> Téléphone</label>
                        <input type="number" id="user_phone" name="user_phone" required>
                    </div>

                    <div class="div_inscription_button">
                        <button class="inscription_button" type="submit">Soumettre ton inscription</button>
                    </div>
                </fieldset>
            </form>
        </div>
        <div>
            <img class="img_inscription" alt="fitness man" src="img/inscription_img_2.jpg">
        </div>

    </div>

</body>
<footer>
    <?php include("_footer.php") ?>
</footer>
</html>