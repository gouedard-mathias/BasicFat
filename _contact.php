
<h2>CONTACT</h2>
<div class="contact">
    <form class="form_contact" action="thanks.php" method="post">
        <fieldset class="contact_fieldset">
            <legend class="contact_legend"> <h2>Nous sommes à votre écoute</h2></legend>
            <div>
                <label for="user_name"> Nom</label>
                <input type="text" id="user_name" name="user_name" required placeholder="Nom Prénom">
            </div>
            <div>
                <label for="user_email"> Email</label>
                <input type="email" id="user_email" name="user_email" required placeholder="@">
            </div>
            <div>
                <label for="user_phone"> Téléphone</label>
                <input type="number" id="user_phone" name="user_phone" required pattern="06[0-9]{8}">
            </div>
            <div>
                <label for="message_subject">Objet de votre message</label>
                <select name="message_subject" id="message_subject">
                    <option>Avoir plus de frites à la cantine
                    <option> Se plaindre des coachs car ils sont très très nuls
                    <option >Je souhaiterais payer moins cher
                </select>
            </div>
            <div>
                <label for="user_message"> Message </label>
                <textarea id="user_message" name="user_message" required rows="5" cols="33" placeholder="Votre message..."></textarea>
            </div>
            <div class="div_contact_button">
                <button class ="contact_button" type="submit">Envoyer votre message</button>
            </div>
        </fieldset>
    </form>

    <div >
        <img src="img/burger_contact.jpg" class = "img_contact" alt="photo d'un burger">
    </div>
</div>

