<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php
// Creo un Array con la squadra di casa/avversari e stampo a schermo il loro relativo punteggio

$matches = [
  [
  'Home'=>'Lakers',
  'Opponents'=>'Clippers',
  'Home points'=>'90',
  'Opponents points'=>'73'],

  [
  'Home'=>'Nets',
  'Opponents'=>'Raptors',
  'Home points'=>'76',
  'Opponents points'=>'79'],

  [
  'Home'=>'Miami Heat',
  'Opponents'=>'Utah Jazz',
  'Home points'=>'89',
  'Opponents points'=>'66'],

  [
  'Home'=>'Warriors',
  'Opponents'=>'Knicks',
  'Home points'=>'93',
  'Opponents points'=>'78'],

];



for ($i=0; $i < count($matches) ; $i++) {
  echo $matches[$i]['Home']. '-' .$matches[$i]['Opponents'] . '||';
  echo $matches[$i]['Home points']. '-' .$matches[$i]['Opponents points'].'</br>'.'</br>';
}
 ?>



  </body>
</html>
