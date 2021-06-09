<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ford Autosalon</title>
</head>
<body>
<?php   $submit = filter_input(INPUT_POST, 'model');
   
   if(isset($submit)) {
    echo "Your request is being processed... DONE! Your shipment will arrive after 8 work days...</br>Thank you for using services of Ford Militarized Vehicles Inc!</br></br>"; 
}
   if(isset($_POST['model']))
    {
    $model = $_POST['model'];
    $color = $_POST['color'];   
    $camo = $_POST['camo'];
    $equipment = $_POST['equipment'];
    echo "Selected model has been prepared: $model </br>";
    echo "Selected color has been applied: $color </br>";
    echo "Selected camo has been applied: $camo </br>";
    foreach($equipment as $choosenequipment) {
     echo "Selected equipment added: $choosenequipment <br>";
    }
    }
     else {?>
    <h1>Militarized Autosalon Ford</h1>
    <form method="post">
    <h2>Choose a Ford model:</h2>
    <label for="model">Choose model</label>
    <select name="model" id="model">
      <option value="focus">Focus</option>
      <option value="ranger">Ranger</option>
      <option value="fiesta">Fiesta</option>
      <option value="figo">Figo</option>
      <opti on value="escort">Escort</option>
      <option value="mondeo">Mondeo</option>
  </select>
    <h2>Choose fuel:</h2>
    <input type="radio" id="benzin" name="fuel" value="gas"><label for="gas">Gas</label></br>
    <input type="radio" id="diesel" name="fuel" value="diesel"><label for="diesel">Diesel</label></br>
    <input type="radio" id="lpg" name="fuel" value="lpg"><label for="lpg">LPG</label></br>
    <input type="radio" id="elektro" name="fuel" value="elektro"><label for="electro">Electromobile</label></br>
    <input type="radio" id="hybrid" name="fuel" value="hybrid"><label for="hybrid">Hybrid</label></br>

    <h2>Choose equipment:</h2>
    <input type="checkbox" value="thrusters" id="thrusters" name="equipment[]"><label for="thrusters">Thrusters</label>
    <input type="checkbox" value="roof_mounted_machinegun" id="roof_machinegun" name="equipment[]"><label for="klimatizace">Automatic Roof Machinegun</label>
    <input type="checkbox" value="door_machineguns" id="door_machineguns" name="equipment[]"><label for="door_machineguns">Doorside Machineguns</label>
    <input type="checkbox" value="bulletproof_tires" id="bulletproof_tires" name="equipment[]"><label for="bulletproof_tires">Bulletproof Tires</label>
    <input type="checkbox" value="bullet_proof_glass" id="bulletproof_glass" name="equipment[]"><label for="bulletproof_glass">Bulletproof Glass</label>
    <input type="checkbox" value="militarized_alexa_ai_assistant" id="militarized_alexa_ai_assistant" name="equipment[]"><label for="militarized_alexa_ai_assistant">Militarized Alexa AI Assistant</label>
    <input type="checkbox" value="mine_laying_module" id="mines" name="equipment[]"><label for="mine_laying_module">Mine Laying Module</label>
    <input type="checkbox" value="hover_module" id="hover" name="equipment[]"><label for="hover">Hover Module</label>
    <input type="checkbox" value="submarine_module" id="submarine" name="equipment[]"><label for="sub">Submarine Module</label>
    <input type="checkbox" value="rear_grenade_launcher" id="grenadelauncher" name="equipment[]"><label for="grenade_launcher">Rear Grenade Launcher</label>

    <h2>Choose color:</h2>
    <select name="color" id="color">
      <option value="sea_blue">Sea Blue</option>
      <option value="dark_brown">Dark Brown</option>
      <option value="dark_green">Dark Green</option>
      <option value="sand_yellow">Sand Yellow</option>
      <option value="snow_white">Snow White</option>
      <option value="black">Black</option>
  </select>

  <h2>Choose camo:</h2>
    <select name="camo" id="camo">
      <option value="desert">Desert</option>
      <option value="tundra">Tundra</option>
      <option value="forest">Forest</option>
      <option value="snow">Snow</option>
      <option value="sea">Sea</option>
      <option value="gray_digital">Gray Digital</option>
  </select>
  </br></br><input type="submit" id="submit">
    <?php } ?>
</body>
</html>