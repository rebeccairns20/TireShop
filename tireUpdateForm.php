<?php

include '../view/header.php';
$tires2 = getTire();
foreach ($tires2 as $tire2) : ?>
<div id="addVForm">
<form action="../view/updateTire.php" method="post">
<h3>Add Tire</h3>
<label>Tire Position: </label>
<select name="pos">
   <option value="R">Motorcycle Rear</option>
   <option value="F">Motorcycle Front</option>
   <option value="S">Spare</option>
   <option value="RR">Rear Right</option>
   <option value="RL">Rear Left</option>
   <option value="FR">Front Right</option>
   <option value="FL">Front Left</option>
</select><br>
<label>Code: </label><input type="number" name="code" value="<?php echo $tire2['tCode'];  ?>"></br>
<label>Name: </label><input type="text" name="name" value="<?php echo $tire2['tName'];  ?>"></br>
<label>Repair Number: </label><input type="text"name="rNum" value="<?php echo $tire2['tRepairNum'];  ?>"></br>

<input type="hidden" value="<?php echo $tireID3; ?>" name="tireID">
<input type="submit"></br>
<?php endforeach; ?>
</form>


<?php

include '../view/footer.php';

?>
