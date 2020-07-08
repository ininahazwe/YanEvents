<?php
 
if (isset($_POST['submitButton']))
 
{
 
    if (get_magic_quotes_gpc())
 
    {
 
      $nom     = stripslashes(trim($_POST['nom']));
 
      $expediteur= stripslashes(trim($_POST['email']));
 
      $sujet= stripslashes(trim($_POST['sujet']));
 
      $message= stripslashes(trim($_POST['message']));
 
    }
 
    else
 
    {
 
      $nom    = trim($_POST['nom']);
 
      $expediteur= trim($_POST['email']);
 
      $sujet= trim($_POST['sujet']);
 
      $message= trim($_POST['message']);
 
    }
 
    $regex_mail = '/^[-+.\w]{1,64}@[-.\w]{1,64}\.[-.\w]{2,6}$/i';
 
    $regex_head = '/[\n\r]/';
 
    if($_SERVER['HTTP_REFERER'] != 'http://www.monsite.fr/nous_contacter/index.php')
 
    {
 
      header('Location:  http://www.monsite.fr');
 
 
    }
 
    elseif (empty($nom) 
 
           || empty($expediteur)
 
           || empty($sujet)
 
           || empty($message))
 
    {
 
      $alert = 'Tous les champs doivent être renseignés';
 
    }
 
    elseif (!preg_match($regex_mail, $expediteur))
 
    {
 
      $alert = 'L\'adresse '.$expediteur.' n\'est pas valide';
 
    }
 
    elseif (preg_match($regex_head, $expediteur)
 
            || preg_match($regex_head, $nom)
 
            || preg_match($regex_head, $sujet))
 
    {
 
        $alert = 'En-têtes interdites dans les champs du formulaire';
 
    }
 
    elseif (!isset($_COOKIE['sent']))
 
    {
 
        $to = 'contact@monsite.fr';
 
        $msg  = 'Bonjour,'."\r\n\r\n";
 
        $msg .= 'Ce mail a été envoyé depuis monsite.fr par'.$nom."\r\n\r\n";
 
        $msg .= 'Voici le message qui vous est adressé :'."\r\n";
 
        $msg .= '***************************'."\r\n";
 
        $msg .= $message."\r\n";
 
        $msg .= '***************************'."\r\n";
 
        $headers = 'From: '.$nom.' <'.$expediteur.'>'."\r\n\r\n";
 
  
 
        if (mail($to, $sujet, $msg, $headers))
 
        {
 
            $alert = 'E-mail envoyé avec succès';
 
  
 
            setcookie("sent", "1", time() + 120);
 
  
 
            unset($_POST);
 
        }
 
        else
 
        {
 
            $alert = 'Erreur d\'envoi de l\'e-mail';
 
        }
 
    }
 
    else
 
    {
 
        unset($_POST);
 
    }
 
}
 
?>