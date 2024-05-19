<?php
// mail mot de passe champ ok
// recupère les champs ecrit



?>

<?php

// variable fonction classes objets 

$mailcorrect = 'test@t.com';
$passwordcorrect = 'mdp';
$emailarecuperer = $_POST['email'];
$passwordarecuperer = $_POST['password'];


// print_r($emailarecuperer);

if ($emailarecuperer === $mailcorrect && $passwordarecuperer === $passwordcorrect) {
    header('location: https://www.google.fr') ;
} else  { echo 'mail ou mot de passe incorrect'; }

// $a = $_SERVER;
//
?>



    <div class="login-container">
        <h2>Connectez-vous</h2>
        <form method="post">
            <label for="email">Email :</label>
            <input type="text" id="email" name="email" required>
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>
            <input type="submit" value="Se connecter">
        </form>
    </div>
    