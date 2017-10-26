<?php
// Une ouverture de balise form
  //Definir une action
function openForm($action = "#")
{
  return "<form action='" . $action . "'>";
}
// Une fermeture de balise form
function closeTag($tag)
{
  return "</" . $tag . ">";
}
// Mise en place d'un input
  // Avec un label

// $type = string
// $name = string
// $value = string
// $label = string
function createInput($type, $name, $value = "", $label)
{
  return "<label>" . $label . "</label><input type='" . $type ."' name='" . $name . "' value='" . $value . "'>";
}
//Mise en place d'un select
function createSelect($name, $label, $options)
{
  /* exemple array multi dimensionnel

  $options = [
    [
      'value' => 'fr',
      'content' => 'Français',
    ],
    [
      'value' => 'en',
      'content' => 'Anglais',
    ],
    [
      'value' => 'de',
      'content' => 'Allemand',
    ],
  ];*/
  $html = "<label>" . $label . "</label>";
  $html .= "<select name='" . $name . "'>";
  foreach ($options as $key => $value) {
    $html .= "<option value='" . $value['value'] . "'>" . $value['content'] . "</option>";
  }
  $html .= "/select>";
  return $html;
}
//Generer un bouton submit
function createSubmit($value)
{
  return "<input type='submit' value='" . $value . "'>";
}
