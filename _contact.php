
<form action="thanks.php" method="post">
    <fieldset>
        <legend>Nous sommes à votre écoute</legend>
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
            <input type="number" id="user_phone" name="user_phone" required>
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
            <textarea id="user_message" name="user_message" required rows="5" cols="33">Votre message...</textarea>
        </div>
        <div>
            <button type="submit">Envoyer votre message</button>
        </div>
    </fieldset>
</form>

<div>
    /* insérer image*/
</div>




