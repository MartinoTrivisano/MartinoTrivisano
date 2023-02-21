<?php
require("database.php");
if(isset($_POST['forgot-password'])){
    $email = $_POST['email'];
    if(!filter_var($email , FILTER_VALIDATE_EMAIL) ){
        $errors['email'] = "La mail non è valida";
    }
    if(empty($email)){
        $errors['email'] = "Email richiesta";
    }
    if (count($errors) == 0) {
        $sql = "SELECT * FROM utente WHERE email = '$email' LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_assoc($result);
        $token = $user['email'];
        sendPasswordResetLink($email, $token);
        exit();
    }
}

$messaage = (new Swift_Message('Verifica la tua mail '))
  -> setForm(EMAIL)
  -> setTo($userEmail)
  -> setBody($body , 'twxt/html');

function sendPasswordResetLink($userEmail , $token){
    global $mailer ;
    $body = '<!DOCTYPE html
             <html lang="en">
             <head>
                <meta charset ="UTF-8">
                <title>Verifica la tua email</title>
             </head>
             <body>
                <div class="wrapper">
                    <p>
                    Hello there , 
                    Perfavore clicca qui per effettuare il reset della password.
                    </p>
                    <a href="password.php?token='.$token .'">
                        Resetta la tua password
                    </a>
                </div>
             </body>
             </html>';
                    
}
?>