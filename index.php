<?php
    require_once('createForm.php');
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mon questionnaire</title>
  </head>
  <body>
    <?php
      echo openForm("monScript.php");
      echo createSelect("country", "Choisissez un pays", [
        [
          "value" => "es",
          "content" => "Espagne",
        ],
        [
          "value" => "jp",
          "content" => "Japan",
        ],
      ]);
      echo createInput("text", "myText", "", "Mon premier input");
      echo createInput("number", "myNumber", "", "Mon deuxieme input");
      echo createInput("radio", "myRadio", "", "Mon troisième input");
      echo createInput("checkbox", "myCheckbox", "", "Mon quatrième input");
      echo createSubmit("Envoyer");
      echo closeTag("form");
    ?>
  </body>
</html>
