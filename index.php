<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>PHP Partie2_Exo3</title>
</head>
<body>
    <?php
 $genderList = array ("homme", "femme");
    $gender = $genderList[rand (0, 1)];
        $age = rand (1, 23);
        $gender = "Homme" or "Femme";
          if($age >= 18 && $gender == "Homme"){
            echo "Vous êtes un Homme et vous êtes majeur";
          }else if($age < 18 && $gender == "Homme"){
            echo "Vous êtes un Homme et vous êtes mineur";
          }else if($age >= 18 && $gender == "Femme"){
            echo "Vous êtes une femme et vous êtes majeur";
          }else{
            echo "Vous êtes une femme et vous êtes mineur";
          }
//&& et || sont des opérateurs logiques, ils servent à ajouter des conditions obligatoires (ET) ou facultatives (OU).
    ?>
</body>
</html>
