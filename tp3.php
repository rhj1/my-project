<!-- <form method="post" class="bg-light p5 contact-form">
    <div class="form-group">
        <input name="prenom" required type="text" class="form-control" placeholder="Prenom">
    </div>
    <div class="form-group">
        <textarea  name="message" required cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
    </div>
    <div class="form-group">
        <button class="btn btn-primary py-3 px-5"type="submit" name="save" >Save</button>
    </div>
</form> -->
<h1>mon page php</h1>
<form method="post" action="#">
    <div class="fields">
        <div class="field">
            <label for="name">Name</label>
            <input name="prenom" required type="text" placeholder="Prenom" id="name">
        </div>
        <div class="field">
            <label for="message">Message</label>
            <textarea name="message" required cols="30" rows="7" placeholder="Message" id="message"></textarea>
        </div>
        <div class="field">
            <button class="btn btn-primary py-3 px-5" type="submit" name="save" id="button">Save</button>
        </div>
    </div>
</form>

<br>

<?php
if (isset($_POST["prenom"])) {
    echo 'Bonjour ' . htmlspecialchars($_POST["prenom"]);
}
?>

<br>

<?php
$cookie_name = "user_name";
$cookie_value = "Kanasayrus";
setcookie($cookie_name, $cookie_value, time() + 3600, "/");

if (!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named " . $cookie_name . " is not set!";
} else {
    echo "Cookie: " . $cookie_name . " is set!<br>";
    echo "Value is: " . htmlspecialchars($_COOKIE[$cookie_name]);
}
?>

<br>

<?php
echo $_SERVER['PHP_SELF'] . "<br>";
echo $_SERVER['SERVER_NAME'] . "<br>";
echo $_SERVER['SERVER_ADDR'] . "<br>";
echo $_SERVER['REMOTE_ADDR'] . "<br>";
?>

<br>

<?php
session_start();

// Display success message if set, then unset it
if (isset($_SESSION['success'])) {
    echo $_SESSION['success'] . "<br>";
    unset($_SESSION['success']);
}

// Display error message if set, then unset it
if (isset($_SESSION['err'])) {
    echo $_SESSION['err'] . "<br>";
    unset($_SESSION['err']);
}

// Set new session messages
$_SESSION['success'] = 'Compte créé avec succès';
$_SESSION['err'] = 'Mot de passe incorrect';
?>



<!-- git commande install depuis navigateur  -->