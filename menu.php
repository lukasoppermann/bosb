<?php
// Main Menu

// Menu Item ----------------
//
$menu[0]['label'] = 'Home';
$menu[0]['path']  = 'index';


// Menu Item ----------------
//
$menu[1]['label'] = 'Über uns';
$menu[1]['path']  = 'ueber_uns';

// Submenu elemente
$menu[1]['children'][] = array(
  'label' => 'A. Oppermann',
  'path'  => 'andreas_oppermann',
);
$menu[1]['children'][] = array(
  'label' => 'U. Jagelmann',
  'path'  => 'ulrike_jagelmann',
);
$menu[1]['children'][] = array(
  'label' => 'L. Oppermann',
  'path'  => 'lukas_oppermann',
);
$menu[1]['children'][] = array(
  'label' => 'S. Schampel-Özcan',
  'path'  => 'schampel_oezcan',
);
$menu[1]['children'][] = array(
  'label' => 'Dr. K. Jutzi',
  'path'  => 'jutzi',
);

// Menu Item ----------------
//
$menu[2]['label'] = 'Angebote';
$menu[2]['path']  = 'angebote';
// Submenu elemente
$menu[2]['children'][] = array(
  'label' => 'Organisation',
  'path'  => 'organisation',
);
$menu[2]['children'][] = array(
  'label' => 'Team',
  'path'  => 'team',
);
$menu[2]['children'][] = array(
  'label' => 'Personen',
  'path'  => 'personen',
);

// Menu Item ----------------
//
$menu[3]['label'] = 'Referenz';
$menu[3]['path']  = 'referenz';

// Menu Item ----------------
//
$menu[4]['label'] = 'Kontakt';
$menu[4]['path']  = 'kontakt';
