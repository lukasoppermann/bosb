<?php
// Main Menu
$menu[0]['label'] = 'Home';
$menu[0]['path']  = 'home';

$menu[1]['label'] = 'Über uns';
$menu[1]['path']  = 'ueber_uns';

$menu[2]['label'] = 'Angebote';
$menu[2]['path']  = 'angebote';

$menu[3]['label'] = 'Kontakt';
$menu[3]['path']  = 'kontakt';
// --------------------------------------------
// Submenus
$menu[1]['children'][0]['label'] = 'Andreas Oppermann';
$menu[1]['children'][0]['path'] = 'andreas_oppermann';

$menu[1]['children'][] = array(
  'label' => 'Ulrike Jagelmann',
  'path'  => 'ulrike_jagelmann'
);
$menu[1]['children'][] = array(
  'label' => 'Lukas Oppermann',
  'path'  => 'lukas_oppermann'
);
