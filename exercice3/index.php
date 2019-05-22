<html>
    <head>
        <title>exercice3Partie2</title>
    </head>
    <body>
<?php

$gender='homme';
 $age = 18;

     if ($gender == 'homme' && $age >=18)
     {
         echo 'vous êtes un homme et vous êtes majeur';
     }
 elseif ($gender == 'homme' && $age < 18)
     {
       echo 'vous êtes un homme et vous êtes mineur';
      }
  elseif ($gender != 'homme'&& $age >= 18)  
  {
     echo 'vous êtes une femme et vous êtes majeur'; 
  }
  else {
    echo 'vous êtes une femme et vous êtes mineur';
  }
?>
        
    </body>
</html>
