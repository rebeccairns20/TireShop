<?php
include '../view/header.php';
$carID3 = filter_input(INPUT_POST, 'carId2');
?>
<div id="addVForm">
<form action="../view/incertTire.php" method="post">
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
   <label>Code: </label><input type="number" name="code"></br>
   <label>Name: </label><input type="text" name="name"></br>
    <!-- Auto date fill  -->
   <label>Repair Number: </label><input type="text"name="rNum"></br>

   <input type="hidden" value="<?php echo $carID3; ?>" name="cID">
   <input type="submit"></br>

</form>
</div>
<?php
 include '../view/footer.php';
?>
