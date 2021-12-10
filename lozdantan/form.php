<?php

if (isset($_POST['validé'])) 
{
    if(isset($_POST['lastName']) && isset($_POST['firstName'])
     && isset($_POST['email']) && isset($_POST['phoneNumber'])
     && isset($_POST['address']) && isset($_POST['zipCode'])
     && isset($_POST['city']) && isset($_POST['text']) 
     && isset($_POST['ref']) && isset($_POST['cadre'])) 
     {
        if(!empty($_POST['lastName']) && !empty($_POST['firstName'])
        && !empty($_Post['email']) && !empty($_POST['phoneNumber']) 
        && !empty($_POST['address']) && !empty($_POST['zipCode']) 
        && !empty($_POST['city']) && !empty($_POST['text']) 
        && !empty($_POST['ref']) && !empty($_POST['cadre'])) 
        {
          $userName = htmlspecialchars($_POST['lastName']);
          $userFirstName = htmlspecialchars($_POST['firstName']);
          $userPhoneNumber = htmlspecialchars($_POST['phoneNumber']);
          $addressUser = htmlspecialchars($_POST['address']);
          $userZipCode = htmlspecialchars($_POST['zipCode']);
          $cityUser = htmlspecialchars($_POST['city']);
        }
        foreach ($email as $emails) {
            if (preg_match('/\w[\w+]+@\w+(\.\w*)?$/', $emails)) {
                echo "$emails est au bon format" .'<br>';
            }  else {
                echo "$emails n'est pas au bon format.".'<br>';
            }
            $return = mail('oliwood4806@gmail.com', 'Envoi depuis la page contact', $_POST['lastName'],
                        $_POST['firstName'], $_POST['email'], $_POST['phoneNumber'], $_POST['address'], 
                        $_POST['zipCode'], $_POST['city'], $_POST['text'], $_POST['ref'], $_POST['cadre']);
        } if ($return)
            echo '<p>Votre message a été envoyé</p>';
        else
            echo '<p>Erreur</p>';
    }
}