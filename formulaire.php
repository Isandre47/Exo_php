<?php 
  //var_dump($_POST);
  echo $_POST[user_name];
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>My test page</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <p>This is my page</p>
    <div class="form">
        <form action="" method="POST">
            <div>
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="user_name" minlength="10" required>
            </div>
            <div>
                <label for="courriel">Courriel :</label>
                <input type="email" id="courriel" name="user_email" required>
            </div>
            <div>
                <label for="courriel">Numéro de téléphone :</label>
                <input type="tel"  placeholder="12-34-56-78-90" pattern="[0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" id="telephone" name="phone_user" required>
            </div>
            <div>
            <select name="Sujets">
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                <option value="fiat">Fiat</option>
                <option value="audi">Audi</option>
                </select>
            </div>
            <div>
                <label for="message">Message :</label>
                <textarea id="message" name="user_message"></textarea>
            </div>
            <div class="button">
                <button type="submit">Envoyer votre message</button>
            </div>
        </form>    
    </div>

  </body>
</html>
