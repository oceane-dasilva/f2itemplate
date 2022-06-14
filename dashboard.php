<?php
 // traiter une donnée
// $nom = htmlspecialchars ($_POST['nom']);
// //  le if = si 
// //  Empty == vide
// // ! devant une fonction = le contraire de 
// // && == and == et
// // != different ==!
//  strlen signifie la longueur d'un string (nbre de lettre)
//  > superieur
// AND
// OR || (contrôle +Alt + 6)
//  Si ce n'est pas vide et que la longueur est de 0 et que longueur est supérieur à 255
// if (empty($nom) AND strlen ($nom) > 0 && strlen($nom) < 255) 
// if (strlen($nom) == 0 || strlen ($nom) > 255 OR empty ($nom) }
//  echo "erreur nom ";
// } -->

// var_dump ($_POST ['nom']);
// echo "<br/>";

// var_dump($_POST);

if (strlen($prenom) == 0 || strlen($prenom) > 255 OR empty($prenom)) {
    
    echo "erreur prenom";
  }
 
  $email_a = 'joe@example.com';
  $email_b = 'bogus';

  if (filter_var($email_a, FILTER_VALIDATE_EMAIL)) {
    echo "L'adresse email '$email_a' est considérée comme valide.";
}
if (filter_var($email_b, FILTER_VALIDATE_EMAIL)) {
    echo "L'adresse email '$email_b' est considérée comme valide.";
} else {
    echo "L'adresse email '$email_b' est considérée comme invalide.";
}
   

  if (strlen($telephone) == 0 || strlen($telephone) > 10 OR empty($telephone)) {
    echo "erreur telephone";
  }

//   if(isset($_POST) AND !empty($_POST))
//      {
//         extract($_POST);
//   $msgerreur=null;
//                         if(!preg_match('`^([0-9]{2})$`', $jj))  //* Vérification des données
//             {
//             $msgerreur=  "Date de naissance invalide.";
//             }
//             elseif(!preg_match('`^([0-9]{2})$`', $mm))
//             {
//             $msgerreur=  "Date de naissance invalide.";
//             }
//             elseif(!preg_match('`^([0-9]{4})$`', $aaaa))
//             {
//             $msgerreur=  "Date de naissance invalide.";
//             }
//             elseif(checkdate($mm,$jj,$aaaa)==false)  //* Vérification que la date existe
//             {
//             $msgerreur=  "Date inexistante.";
//             }
//          }
//    else
//                     {
//  $result = "INSERT INTO table (jour, mois, anee) VALUES ('$jj', '$mm', '$aaa')";
  
//   if (strlen($date) == 0 || strlen($date) >  OR empty($date)) {
//     echo "erreur date";
//   }

  if (strlen($motdepasse) == 0 || strlen($motdepasse) > 255 OR empty($motdepasse)) {
    echo "erreur motdepasse";
}