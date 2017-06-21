<?php

function personne($age, $genre){
  if ($genre === 'homme' && $age < 18){
    return 'Vous êtes un homme et vous êtes mineur';
  }
  elseif($genre === 'homme' && $age >= 18){
    return 'Vous êtes un homme et vous êtes majeur';
  }
  elseif($genre === 'femme' && $age < 18){
    return 'Vous êtes une femme et vous êtes mineur';
  }
  else{
    return 'Vous êtes une femme et vous êtes majeur';
  }
}

echo personne(homme, 16);


 ?>
