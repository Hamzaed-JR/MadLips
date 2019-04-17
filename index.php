<!doctype html>
<html lang="nl">

<head>
    <title>MadLips</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Archivo" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
  <?php
    $huisdierErr = $levenErr = $wonenErr = $verveeltErr = $speelgoedErr = $spijbelErr = $kopenErr = $bezigheidErr = "";
    $huisdier = $leven = $wonen = $verveelt = $speelgoed = $spijbel = $kopen = $bezigheid = "";
  ?>

  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["huisdier"])) {
        $huisdierErr = "Huisdier is required";
      } else {
        $huisdier = test_input($_POST["huisdier"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$huisdier)) {
          $huisdierErr = "Only letters and white space allowed"; 
        }
      }
      if (empty($_POST["leven"])) {
        $levenErr = "Name is required";
      } else {
        $leven = test_input($_POST["leven"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$leven)) {
          $levenrErr = "Only letters and white space allowed"; 
        }
      }
      if (empty($_POST["wonen"])) {
        $wonenErr = "Name is required";
      } else {
        $wonen = test_input($_POST["wonen"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$wonen)) {
          $wonenErr = "Only letters and white space allowed"; 
        }
      }
      if (empty($_POST["verveelt"])) {
        $verveeltErr = "Name is required";
      } else {
        $verveelt = test_input($_POST["verveelt"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$verveelt)) {
          $verveeltErr = "Only letters and white space allowed"; 
        }
      }
      if (empty($_POST["speelgoed"])) {
        $speelgoedErr = "Name is required";
      } else {
        $speelgoed = test_input($_POST["speelgoed"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$speelgoed)) {
          $speelgoedErr = "Only letters and white space allowed"; 
        }
      }
      if (empty($_POST["spijbel"])) {
        $spijbelErr = "Name is required";
      } else {
        $spijbel = test_input($_POST["spijbel"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$spijbel)) {
          $spijbelErr = "Only letters and white space allowed"; 
        }
      }
      if (empty($_POST["kopen"])) {
        $kopenErr = "Name is required";
      } else {
        $kopen = test_input($_POST["kopen"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$kopen)) {
          $kopenErr = "Only letters and white space allowed"; 
        }
      }
      if (empty($_POST["bezigheid"])) {
        $bezigheidErr = "Name is required";
      } else {
        $bezigheid = test_input($_POST["bezigheid"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$bezigheid)) {
          $bezigheidErr = "Only letters and white space allowed"; 
        }
      }
    }

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
  ?>

  <div class = "container">
    <div class ="header">
      <h1> Mad Lips </h1>
    </div>
    <div class = "banner">
      <h2> Er heerst paniek.....   Onkunde</h2>
    </div>

    <?php
      if(empty($huisdier) or empty($leven) or empty($wonen) or  empty($verveelt) or empty($speelgoed) or empty($spijbel) or empty($kopen) or empty($bezigheid)){
    ?>

    <form class="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
      <p>Welk dier zou je nooit als huisdier willen hebben?: <input type="text" name="huisdier" required>*</p>
          <br>
      <p>Wie is de belangrijkste persoon in je leven? : <input  type="text" name="leven" required>*</p>
          <br>
      <p>In welk land zou je graag willen wonen? : <input type="text" name="wonen" required>*</p>
          <br>
      <p>Wat doe je als je je verveelt? : <input type="text" name="verveelt" required>*</p>
          <br>
      <p>Met welk speelgoed speelde je als kind het meest? <input type="text" name="speelgoed" required>*</p>
          <br>
      <p>Bij welke docent spijbel je het liefst? <input type="text" name="spijbel" required>*</p>
          <br>
      <p>Als je € 100.000,- had, wat zou je dan kopen? <input type="text" name="kopen" required>*</p>
          <br>
      <p>Wat is je favoriete bezigheid? <input type="text" name="bezigheid">*</p>
            <br>
      <input type="submit">
    </form>

    <?php
    } 
    ?>

  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){  
      echo "Er heerst paniek in het koninkrijk ";
        echo $wonen;
          echo " koning ";
            echo $spijbel;
      echo " is ten einde raad en als koning ";
        echo $spijbel;
      echo " ten einde raad is, dan roept hij zijn ten-einde-raadsheer ";
        echo $leven;
      echo "<br><br>";

      echo $leven;
        echo "! Het is een ramp! Het is een schande!<br><br>";

      echo "Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?  <br><br>";

      echo "Mijn ";
        echo $huisdier;
          echo " is verdwenen! Zo maar, zonder waarschuwing. En ik had net ";
            echo $speelgoed;
              echo " voor hem gekocht! <br><br>";

      echo "Majesteit, uw ";
        echo $huisdier;
          echo " komt vast vanzelf weer terug! <br><br> ";

      echo "Ja, da's erg leuk en aardig, maar hoe moet ik in de   tussentijd ";
        echo $bezigheid;
          echo " leren? <br><br> ";

      echo "Maar Sire, daar kunt u toch uw ";
        echo $kopen;
          echo " voor gebruiken. <br><br>";

      echo $leven;
        echo ", je hebt helmaal gelijk! Wat zou ik doen als ik jou niet     had. <br><br>";

      echo "Mij ";
        echo $verveelt;
          echo ", Sire.";
    }
  ?>
  <div class = "footer">
    <h2 class = "me"> Hamza Edriouch </h2>
    </div>
  </div>
</body>
</html>