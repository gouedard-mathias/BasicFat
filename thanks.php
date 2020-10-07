<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>$Title$</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<?php include("_header.php"); ?>

<div class="thanks">
    <h3 class="title_thanks"> THANKS ! </h3>
    <p class= "p_thanks">Merci <b><?php echo $_POST["user_name"]; ?></b>
        de nous avoir contacté à propos de <b>“<?php echo $_POST["message_subject"]; ?>”</b>. <br>
        Un de nos conseiller vous contactera soit à l’adresse <b>  <?php echo $_POST["user_email"]; ?> </b>
        ou par téléphone au <b> <?php echo $_POST["user_phone"]; ?> </b>
        dans les plus brefs délais pour traiter votre demande : <br>
        <b> <?php echo $_POST["user_message"]; ?> </b> </p>
</div>

<div class="div_img_thanks">
    <img  src= "https://i.postimg.cc/bJt0CxGw/thanks-img.jpg" alt="photo d'un homme qui tiens un burger" class="img_thanks">
</div>

<?php include("_footer.php"); ?>
</body>
</html>